<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Income;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class IncomeController extends BaseApiController
{
    protected $endpoint = 'incomes';

    protected function getModel()
    {
        return Income::class;
    }
}
