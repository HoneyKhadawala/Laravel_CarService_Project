<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompanyPlanModel extends Model
{
    use HasFactory;
    protected $table= "tbl_insuranceplan";
    protected $primaryKey = "InsurancePlan_Id";
}
