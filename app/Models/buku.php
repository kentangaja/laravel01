<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class buku extends Model
{
    protected $guarded = [];

    public function kategori():BelongsTo
    {
        return $this->belongsTo(kategori::class);
    }

    public function penerbit():BelongsTo
    {
        return $this->belongsTo(penerbit::class);
    }

    public function penulis():BelongsTo
    {
        return $this->belongsTo(penulis::class);
    }

    public function rak():BelongsTo
    {
        return $this->belongsTo(rak::class);
    }

    public function peminjaman_detail():HasMany
    {
        return $this->hasMany(peminjaman_detail::class);
    }

    public $timestamps = false;
}
