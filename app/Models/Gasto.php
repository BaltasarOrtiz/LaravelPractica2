<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasMany(Item::class);
    }

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

    public function pago(){
        return $this->hasOne(Pago::class);
    }
    
    public function etiqueta_gasto(){
        return $this->hasMany(Etiqueta_gasto::class);
    }

    public function perfil(){
        return $this->belongsTo(Perfil::class);
    }
}
