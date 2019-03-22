<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
	protected $table = 'dosens';
    protected $primaryKey = 'nip';
    public $incrementing = false;

    protected $fillable = [
    	'nip', 'namadosen'
    ];

    public function mahasiswas() {
        return $this->hasMany('App\Mahasiswa', 'nipdosenwali', 'nip');
    }

}
