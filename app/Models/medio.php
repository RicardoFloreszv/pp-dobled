<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medio extends Model
{
    use HasFactory;

    protected $table = 'medio';

    protected $primaryKey = 'id_medio';

    protected $guarded = [];


    public function campana()
    {
        return $this->belongsToMany(Campana::class);
    }

    public function historialBusqueda()
    {
        return $this->belongsToMany(HistorialBusqueda::class);
    }
}
