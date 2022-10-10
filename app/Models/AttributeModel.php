<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeModel extends Model
{
    use HasFactory;
    protected $table= "tbl_attribute";
    protected $primaryKey = "Attribute_Id"; 
}
