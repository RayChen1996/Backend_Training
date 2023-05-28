<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    protected $table = 'HOLIDAY';
 
    protected $fillable = ['H_DATE' , 'H_NOTE'   ];
    public $timestamps = false;
}
