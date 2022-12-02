<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    use HasUuids;
    protected $guarded = ['id'];
    // protected $primaryKey = ['kode_buku'];
   
    public function buku()
    {
        return $this->hasOne(Peminjaman::class);
    }
    
    
}
