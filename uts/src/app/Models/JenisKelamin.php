<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JenisKelamin extends Model
{
    protected $table = 'jenis_kelamins'; 
    protected $fillable = ['nama'];      

    public function supirs(): HasMany
    {
        return $this->hasMany(Supir::class);
    }
}