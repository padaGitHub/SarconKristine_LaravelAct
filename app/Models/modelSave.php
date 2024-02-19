<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelSave extends Model
{
    use HasFactory; 

    protected $table = "register";

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];
}
