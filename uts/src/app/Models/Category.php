<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function namaLengkaps(): HasMany
    {
        return $this->hasMany(NamaLengkap::class);
    }

    public function nomorSims(): HasMany
    {
        return $this->hasMany(NomorSim::class);
    }

    public function jenisKelamins(): HasMany
    {
        return $this->hasMany(JenisKelamin::class);
    }
}
