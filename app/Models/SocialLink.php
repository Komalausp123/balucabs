<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'facebook', 'instagram', 'youtube','twitter','linkedin','pinterest','phone','email','address','footer_content','map','location'];
}
