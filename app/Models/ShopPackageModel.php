<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopPackageModel extends Model
{
    use HasFactory;
    protected $table="tb_shoppackage";
    protected $primaryKey= "ShopPackage_Id";
}
