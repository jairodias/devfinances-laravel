<?php

namespace App\Models;

use App\Helpers\Utils;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Transaction
 *
 * @property int $id
 * @property float $movement
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 *
 */
class Transaction extends Authenticatable
{
    protected $fillable = [
        'movement',
        'description',
        'created_at',
        'user_id'
    ];

    protected $appends = [
        'movementFormatted'
    ];

    protected $dates = [
        'created_at' => 'date'
    ];

    public $timestamps = null;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getMovementFormattedAttribute()
    {
        return (new Utils())->formatBalance($this->movement/100);
    }
}
