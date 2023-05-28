<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $table = 'READER';
    protected $primaryKey = 'R_IDX';
    // protected $fillable = ['H_IDX', 'H_DATETIME', 'H_CARD', 'H_STATE'];


}
