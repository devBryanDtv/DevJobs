<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Vacante extends Model
{
    use HasFactory;
    
    use SoftDeletes;



    protected $dates = ['ultimo_dia'];

    public function getUltimoDiaAttribute($value)
{
    return Carbon::parse($value)->format('d/m/Y');
}


    protected $fillable = [
         'titulo',
         'salario_id',
         'categoria_id',
         'empresa',
         'ultimo_dia',
         'descripcion',
         'imagen',
         'user_id'
    
    ];

    public function categoria()
    {
        // relacion entre salario_id y categoria 
        return $this->belongsTo(Categoria::class);
    }

    public function salario()
    {
        // relacion entre salario_id y categoria 
        return $this->belongsTo(Salario::class);
    }
}
