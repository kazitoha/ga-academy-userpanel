<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class committee extends Model
{
    use HasFactory;
    protected $fillable=['name','email', 'phone', 'designation', 'file_path', 'about','slug', 'created_at', 'updated_at'];
}
