<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $primaryKey = 'kodematkul';
    public $incrementing = false;

    protected $fillable = [
    	'kodematkul', 'namamatkul', 'kelas', 'nipdosenpengajar'
    ];

}
