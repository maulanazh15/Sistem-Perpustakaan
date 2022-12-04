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
   
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('judul_buku','like','%'.$search.'%')
                ->orWhere('penulis','like','%'.$search.'%');
            });
        });
    }

    public function buku()
    {
        return $this->hasOne(Peminjaman::class);
    }
    
    
}
