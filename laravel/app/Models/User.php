<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids, SoftDeletes;
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp',
        'foto_profil'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function alamatUser() : HasOne
    {
        return $this->hasOne('App\Models\AlamatUser');
    }

    public function order() : HasMany
    {
        return $this->hasMany('App\Models\Order');
    }

    public function keranjang() : HasOne
    {
        return $this->hasOne('App\Models\Keranjang');
    }

    public function produk() : HasMany
    {
        return $this->hasMany('App\Models\Produk');
    }

    public function metodePembayaran() : HasMany
    {
        return $this->hasMany('App\Models\MetodePembayaran');
    }   
}
