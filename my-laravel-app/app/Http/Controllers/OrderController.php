<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class OrderController extends BaseApiController
{
    protected $endpoint = 'orders';

    protected function getModel()
    {
        return Order::class;
    }
}
