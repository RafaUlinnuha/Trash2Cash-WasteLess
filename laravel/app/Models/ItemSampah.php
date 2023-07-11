<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemSampah extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'nama_jenis',
        'deskripsi',
        'jumlah',
        'hargasatuan',
        'sampah_id',
        'kategori_sampah_id'
    ];

    public function sampah(): BelongsTo
    {
        return $this->belongsTo('App\Models\Sampah');
    }

    public function kategoriSampah() : BelongsTo
    {
        return $this->belongsTo('App\Models\KategoriSampah');
    }
}