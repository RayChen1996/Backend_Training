<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    // protected $connection = 'firebird';
    protected $table = 'HISTORYS';
    protected $primaryKey = 'H_idx';
    protected $fillable = ['H_IDX' , 'H_DATETIME' , 'H_CARD', 'H_STATE' ];
    // public $timestamps = false;
}
