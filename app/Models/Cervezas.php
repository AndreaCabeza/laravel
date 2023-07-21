<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cervezas extends Model
{
    use HasFactory ;
    protected $fillable = ['clase','nombre','descripcion','precio','stock','codigo','activo'];
    protected $table ='cervezas';

    public function facturas()
    {
        return $this->belongsToMany(Factura::class, 'factura_cerveza');
    }
}
