<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Matelas extends Model
{
    use HasFactory;

    protected $fillable = ['image'];


    protected $casts = [
        'price' => 'decimal:2', //Permet d'ajouter les 2 décimales aux prix
        'discount_price' => 'decimal:2',
    ];

    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brand_id'); //Ici, équivalent de : select * from `brands` where `brands.id` = brand_id limit 1
        //return $this->hasOne(Brand::class, 'id'); //select * from `brands` where `brands.id` = brand_id and `brands`.`id` is not null limit 1
    }

    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class); 
    }

}
