<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','cantidad_personas','precio'];
    protected $table ='menus';

    public function facturas()
    {
        return $this->belongsToMany(Factura::class, 'factura_menu');
    }
}
