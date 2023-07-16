<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
 use HasFactory;
 protected $fillable = ['nombre'];
 public function restaurante()
 {
 return $this->hasMany(Producto::class); // Una categoria tiene muchos productos
 }
}

