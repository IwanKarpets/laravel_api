<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

abstract class BaseApiController extends Controller
{
    protected $endpoint;

    public function fetchAndStore(Request $request)
    {
        // Получаем параметры запроса
        $queryParams = $this->getRequestParams($request);

        // Получаем данные с API
        $data = $this->fetchData($queryParams);

        // Обрабатываем полученные данные
        if ($data) {
            $this->storeData($data);
            return response()->json(['message' => 'Data fetched and stored successfully.']);
        } else {
            return response()->json(['message' => 'Failed to fetch data from API.'], 500);
        }
    }


    private function getRequestParams(Request $request)
    {
        return [
            'dateFrom' => $request->input('dateFrom'),
            'dateTo' => $request->input('dateTo'),
            'page' => $request->input('page'),
            'key' => $request->input('key'),
            'limit' => $request->input('limit') ?? 1,
        ];
    }

    private function fetchData(array $queryParams)
    {
        $response = Http::get(config('services.api.url') . $this->endpoint, $queryParams);
        return $response->successful() ? $response->json() : null;
    }


    private function storeData(array $data)
    {
        try {
            unset($data['links']);
            unset($data['meta']);
            $this->getModel()::truncate();
            foreach ($data as $item) {
                foreach ($item as $entry) {
                    $this->getModel()::updateOrCreate($entry);
                }
            }
        } catch (QueryException $e) {
            Log::error('Database error: ' . $e->getMessage());
            abort(500, 'Failed to store data.');
        }
    }

    abstract protected function getModel();
}
