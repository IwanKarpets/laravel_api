<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class StockController extends BaseApiController
{
    protected $endpoint = 'stocks';

    protected function getModel()
    {
        return Stock::class;
    }
}
