<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function saas()
    {

        return $this->hasMany(Saas::class);
    }

    public function sdevelopment()
    {

        return $this->hasMany(Sdevelopment::class);
    }

    public function aipowered()
    {

        return $this->hasMany(AiPowered::class);
    }
    public function unicash()
    {

        return $this->hasManyThrough(AiPowered::class, Saas::class);
    }
}
