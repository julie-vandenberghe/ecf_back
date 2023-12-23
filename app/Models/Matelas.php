<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matelas extends Model
{
    use HasFactory;

    protected $fillable = ['image'];


    protected $casts = [
        'price' => 'decimal:2', //Permet d'ajouter les 2 décimales aux prix
        'discount_price' => 'decimal:2',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id');
    }

}
