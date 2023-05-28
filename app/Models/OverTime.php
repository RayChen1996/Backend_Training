<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverTime extends Model
{
    use HasFactory;

    protected $table = 'OVERTIME';
    protected $primaryKey = 'A_NO';
    protected $fillable = ['A_EMPNO' , 'A_ITEMNO' ,
    'A_DAYS','A_STIME','A_ETIME','A_NOTE','A_EDATE','A_HOURS',
    'A_DATE','A_MONEY','A_HOURS'
    

   ];
    public $timestamps = false;

///a.A_NO, a.A_EMPNO, a.A_ITEMNO, a.A_SDATE, a.A_STIME,
// a.A_EDATE, a.A_ETIME, a.A_NOTE, a.A_DAYS, a.A_HOURS, 
//a.A_DATE, a.A_MONEY, a.A_TABLENO



}
