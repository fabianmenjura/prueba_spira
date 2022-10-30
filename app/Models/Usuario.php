<?php

namespace App\Models;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $id_u
 * @property $nombre
 * @property $apellido
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'id_u' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_u','nombre','apellido','email'];

/*RELACION M:M cursos usuarios*/
    public function cursos()
    {
        return $this->belongsToMany(Curso::class)->withTimestamps();
    }
}
