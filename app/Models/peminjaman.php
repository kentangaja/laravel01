<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class peminjaman extends Model
{
    protected $guarded=[];

    public function peminjaman_detail():HasMany
    {
        return $this->hasMany(peminjaman_detail::class);
    }

    // public function users():HasMany
    // {
    //     return $this->hasMany(users::class);
    // }

    public $timestamps = false;
}
