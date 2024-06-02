<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'last_change_date',
        'supplier_article',
        'tech_size',
        'barcode',
        'quantity',
        'is_supply',
        'is_realization',
        'quantity_full',
        'warehouse_name',
        'in_way_to_client',
        'nm_id',
        'in_way_from_client',
        'subject',
        'category',
        'brand',
        'sc_code',
        'price',
        'discount',
    ];
}
