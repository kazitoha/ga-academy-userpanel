<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officeStaff extends Model
{
    use HasFactory;
    protected $fillable=['category','group','name','email', 'phone', 'designation', 'file_path', 'about', 'created_at', 'updated_at'];

}
