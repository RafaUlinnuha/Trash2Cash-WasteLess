<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ItemKeranjang extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'jumlah',
        'produk_id',
        'keranjang_id'
    ];

    public function keranjang(): BelongsTo
    {
        return $this->belongsTo('App\Models\Keranjang');
    }

    public function produk(): BelongsTo
    {
        return $this->belongsTo('App\Models\Produk');
    }
}
