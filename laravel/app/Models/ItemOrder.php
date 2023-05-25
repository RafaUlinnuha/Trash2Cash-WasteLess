<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemOrder extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'jumlah',
        'order_id',
        'produk_id'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo('App\Models\Order');
    }

    public function produk(): BelongsTo
    {
        return $this->belongsTo('App\Models\Produk');
    }
}
