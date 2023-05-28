<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dep extends Model
{
    use HasFactory;

    protected $table = 'CARDS';
    protected $primaryKey = 'C_IDX';
    protected $fillable = ['C_CARD' , 'U_IDX' ,'C_PW' ,'C_FP_COUNT' ,'CREATETIME','EDITTIME' ,'EXPIRE_DATE' ,'C_PWD_SWITCH'  ];
  


    //a.C_FP_1, a.C_FP_2, a.C_FP_3, a.CREATETIME, a.EDITTIME, a.EXPIRE_DATE, a.C_PWD_SWITCH
}
