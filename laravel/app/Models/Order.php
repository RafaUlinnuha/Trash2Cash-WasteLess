<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;


class Order extends Model
{
    use SoftDeletes, HasFactory, HasUuids, Sortable;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
    protected $fillable = [
        'user_id',
        'status'
    ];

    public $sortable = ['updated_at', 'status'];

    public function itemOrder() : HasMany
    {
        return $this->hasMany('App\Models\ItemOrder');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function pembayaran() : HasOne
    {
        return $this->hasOne('App\Models\Pembayaran');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'item_orders');
    }

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'item_orders');
    }
}
