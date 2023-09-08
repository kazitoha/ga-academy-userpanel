<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable =['title','file_path','category','slug'];
    use HasFactory;
}
