<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'firstname', 'professionnal', 'civility', 'company', 'address', 'addressbis', 'bp', 'postal', 'city', 'phone', 'country_id', 'facturation',
    ];
    public function country()
{
    return $this->belongsTo(Country::class);
}
}
