<?php

namespace App\Models;

use App\Models\Range;
use App\Models\Address;
use App\Models\OrderAddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'tax',
    ];
    public $timestamps = false;

    public function ranges()
{
    return $this->belongsToMany(Range::class, 'colissimos')->withPivot('id', 'price');
}

public function addresses()
{
    return $this->hasMany(Address::class);
}

public function order_addresses()
{
    return $this->hasMany(OrderAddress::class);
}
}
