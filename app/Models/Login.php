<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $table = 'UAC';
    protected $primaryKey = 'U_IDX';
    protected $fillable = ['U_ID' , 'U_PASSWORD' , 'U_ACCESS', 'U_CREATE', 'U_FIX'   ];


}
