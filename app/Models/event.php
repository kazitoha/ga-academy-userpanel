<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{

    protected $fillable =['event_name','event_date','about_event','file_path'];
    use HasFactory;
}