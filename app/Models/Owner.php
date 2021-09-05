<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
    ];

    public function arsip() {
    	return $this->belongsTo(Arsip::class, 'owner_nik', 'nik');
    }
}