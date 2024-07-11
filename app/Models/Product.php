<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'slug',
        'price',
        'weight',
        'active',
        'quantity',
        'quantity_alert',
        'image',
        'description'
    ];


    public function getSlug()
    {
        return str($this->name)->slug();
    }

    public function getFormattedPriceAttribute()
    {
        return  str_replace('.', ',', ($this->price/100)) . ' € ';
    }

}
