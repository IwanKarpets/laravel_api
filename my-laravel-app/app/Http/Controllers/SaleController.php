<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class SaleController extends BaseApiController
{
    protected $endpoint = 'sales';

    protected function getModel()
    {
        return Sale::class;
    }
}
