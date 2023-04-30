<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'nama',
        'nama_sub_kategori',
        'jumlah',
        'harga',
        'deskripsi',
        'gambar'
    ];

    public function kategoriSampah() : BelongsTo
    {
        return $this->belongsTo('App\Models\KategoriSampah');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function itemOrder() : BelongsTo
    {
        return $this->hasMany('App\Models\ItemOrder');
    }


}
