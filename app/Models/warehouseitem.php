<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouseitem extends Model
{
    use HasFactory;


    protected $fillable = [
        'item_code',
        'item_name',
        'item_category',
        'min_quantity',
        'user'
    ];
}
