<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sampah extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = [
        'anggota_user_id',
        'bank_user_id',
        'tgl_jemput',
        'waktu_jemput',
        'status'
    ];

    public function itemSampah() : HasMany
    {
        return $this->hasMany('App\Models\ItemSampah');
    }

    public function anggotaUser(): BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'anggota_user_id');
    }

    public function bankUser(): BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'bank_user_id');
    }

}
