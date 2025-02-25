<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangImage extends Model
{
    use HasFactory;

    protected $fillable = ['barang_id', 'image_path'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}

