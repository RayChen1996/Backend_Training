<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dep extends Model
{
    use HasFactory;

    protected $table = 'DEP';
    protected $primaryKey = 'D_DEPNO';
    protected $fillable = ['D_NAME' , 'D_NOTE'   ];
    public $timestamps = false;
}
