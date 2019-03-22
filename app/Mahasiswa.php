<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nrp';
    public $incrementing = false;
    protected $table = 'mhs';


    protected $fillable = [
    	'nrp', 'namahmhs', 'nipdosenwali'
    ];

    public function dosen()
    {         
        return $this->belongsTo('App\Dosen', 'nipdosenwali', 'nip');
    }   
}
