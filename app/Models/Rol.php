<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';
    protected $primaryKey = 'id_rol';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_rol',
        'nombre_rol',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class,'user_rol','id_user','id_rol');
    }


    public function permiso()
    {
        return $this->belongsToMany(Permiso::class,'rol_permiso','id_rol','id_permiso');
    }
}
