<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Range extends Model
{
    use HasFactory;

    protected $fillable = [
        'max',
    ];
    public $timestamps = false;

    public function countries()
{
    return $this->belongsToMany(Country::class, 'colissimos')->withPivot('price');
}
}
