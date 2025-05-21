<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NamaLengkap extends Model
{
    protected $table = 'nama_lengkaps';
    protected $fillable = [
        'category_id',
        'nama',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
