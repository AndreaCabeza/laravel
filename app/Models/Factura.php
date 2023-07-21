<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = ['medio_pago','fecha_hora','clase_factura','codigo_factura','cliente','correo','monto'];
    protected $table ='factura';

    public function cervezas()
    {
        return $this->belongsToMany(Cervezas::class, 'factura_cerveza');
    }

    public function menu()
    {
        return $this->belongsToMany(Menu::class, 'factura_menu');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class); // Relación inversa, una factura pertenece a un cliente.
    }
}
