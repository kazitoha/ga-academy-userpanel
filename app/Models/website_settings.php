<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class website_settings extends Model
{
    use HasFactory;
    protected $fillable =['school_name','primary_logo','primary_logo_height','primary_logo_width','secondary_logo','chairman_name','chairman_speech','chairman_image','head_teacher_name','head_teacher_speech','head_teacher_image','founded','total_student','phone_number','mobile_number','email','facebook_link','address','google_map_link'];

}
