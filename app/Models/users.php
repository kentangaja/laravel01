<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class users extends Authenticatable
{
    use HasRoles;

    protected $guarded = [];

    public $timestamps = false;

    protected static function register($data)
    {
        return self::create($data);
    }

    public function getRoleAttribute()
    {
        return $this->user_level; 
    }

    public function peminjaman(): HasMany
    {
        return $this->hasMany(peminjaman::class);
    }
}
