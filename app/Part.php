<?php

namespace horsefly;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
   	   

     protected $fillable =[

        'partNumber', 
        'esDescription', 
        'enDescription',
        'cost',
        'weight',
        'grossWeight'];

}

