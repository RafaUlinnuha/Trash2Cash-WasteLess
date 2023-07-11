<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriSampah extends Model
{
    use SoftDeletes, HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = [
        'nama',
        'slug'
    ];

    public function produk() : HasMany
    {
        return $this->hasMany('App\Models\Produk');
    }

    public function itemSampah() : HasMany
    {
        return $this->hasMany('App\Models\ItemSampah');
    }
}
