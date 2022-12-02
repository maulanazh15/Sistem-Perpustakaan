<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = ['id'];

    public function buku() {
        return $this->belongsTo(Buku::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $table = 'peminjaman';
}
