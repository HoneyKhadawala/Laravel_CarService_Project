<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsModel extends Model
{
    protected $table = "tbl_feedback";
    protected $primaryKey = "Feedback_Id";
}
