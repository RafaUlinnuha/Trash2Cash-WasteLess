<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MetodePembayaran extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'nama_metode',
        'atas_nama',
        'no_rek',
        'user_id'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
