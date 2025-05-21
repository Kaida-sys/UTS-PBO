<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NomorSim extends Model
{
    protected $table = 'nomor_sims';
    protected $fillable = [
        'category_id',
        'nomor',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
