<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function corporativo()
    {
        return $this->belongsTo(Corporativo::class);
    }

    public function contacto()
    {
        return $this->belongsToMany(Contacto::class);
    }

}
