<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
    ];

    public function itemKeranjang() : HasMany
    {
        return $this->hasMany('App\Models\ItemKeranjang');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
