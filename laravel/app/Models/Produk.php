<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = [
        'nama',
        'nama_sub_kategori',
        'jumlah',
        'harga',
        'deskripsi',
        'gambar',
        'slug'
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
