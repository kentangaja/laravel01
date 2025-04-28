<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class users extends Model
{
    protected $guarded=[];

    public function peminjaman():BelongsTo
    {
        return $this->belongsTo(peminjaman::class);
    }

    public $timestamps = false;

    protected static function register ($data)
    {
    return self::create($data);
    }

}