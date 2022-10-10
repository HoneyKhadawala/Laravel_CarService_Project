<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsModel extends Model
{
    protected $table="tbl_model";
    protected $primaryKey="Model_Id";
}
