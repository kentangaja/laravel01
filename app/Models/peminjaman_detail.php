<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class peminjaman_detail extends Model
{
    protected $guarded=[];

    public function buku():BelongsTo
    {
        return $this->belongsTo(buku::class);
    }

    public function peminjaman():BelongsTo
    {
        return $this->belongsTo(peminjaman::class);
    }

    public $timestamps = false;
}
