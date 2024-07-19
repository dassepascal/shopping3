<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'color',
        'indice',
    ];
    public $timestamps = false;
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
}
