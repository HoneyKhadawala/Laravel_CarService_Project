<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    use HasFactory;
    protected $table= "tbl_price";
    protected $primaryKey = "Price_Id";
}
