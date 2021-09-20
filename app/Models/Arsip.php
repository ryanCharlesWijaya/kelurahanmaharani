<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'owner_nik',
        'kode_dokumen',
        'jenis_dokumen',
        'nomor_arsip',
        'file_name',
    ];

    public function owner() {
    	return $this->hasOne(Owner::class, 'nik', 'owner_nik');
    }

    public function jenisDokumen() {
        return $this->hasOne(JenisDokumen::class, 'id', 'jenis_dokumen');
    }

    public function user() {
    	return $this->hasOne(User::class, 'id', 'user_id');
    }
}
