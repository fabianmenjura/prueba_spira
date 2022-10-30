<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cursousuario
 *
 * @property $id
 * @property $usuario_id
 * @property $curso_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cursousuario extends Model
{
    
    static $rules = [
		'usuario_id' => 'required',
		'curso_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_id','curso_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    /*Relacion curso a cursousuario*/
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    

}
