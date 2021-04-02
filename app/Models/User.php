<?php

namespace App\Models;

use App\Models\Traits\Balance;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Transaction;

class User extends Authenticatable
{
    use Notifiable;
    use Balance;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * @var array
    */
    protected $appends = [
        'incomes'
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
