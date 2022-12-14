<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unicash extends Model
{
    use HasFactory;

    public function saas()
    {
        return $this->belongsTo(Saas::class);
    }
}
