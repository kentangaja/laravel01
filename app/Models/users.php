<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class users extends Authenticatable
{
    protected $guarded = [];

    public $timestamps = false;

    protected static function register($data)
    {
        return self::create($data);
    }

    public function peminjaman(): HasMany
    {
        return $this->hasMany(peminjaman::class);
    }
}
