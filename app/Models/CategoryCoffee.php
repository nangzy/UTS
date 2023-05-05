<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCoffee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function coffees()
    {
        return $this -> hasMany(Coffee::class);
    }
}
