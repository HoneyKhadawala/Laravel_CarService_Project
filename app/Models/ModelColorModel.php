<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelColorModel extends Model
{
    use HasFactory;
    protected $table= "tbl_model_color";
    protected $primaryKey = "ModelColor_Id";
}
