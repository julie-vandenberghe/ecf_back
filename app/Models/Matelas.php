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
        return $this->belongsTo(Brand::class, brand_id); //Ici, équivalent de : select * from `brands` where `brands.id` = brand_id limit 1
        // Optionnel : on peut indiquer la clé étrangère en 2e paramétre ("brand_id")
        //return $this->hasOne(Brand::class, 'id'); //select * from `brands` where `brands.id` = brand_id and `brands`.`id` is not null limit 1
    }

}
