<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Renta
 *
 * @property $id
 * @property $fechaini
 * @property $fechafin
 * @property $libro_id
 * @property $cliente_id
 * @property $status_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Libro $libro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Renta extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaini','fechafin','libro_id','cliente_id','status_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function libro()
    {
        return $this->hasOne('App\Models\Libro', 'id', 'libro_id');
    }
    

}
