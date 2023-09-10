<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permiso';
    protected $primaryKey = 'id_permiso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_permiso',
        'metodo',
        'uri',
    ];

    public function rol(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class,'rol_permiso','id_permiso','id_rol');
    }
}
