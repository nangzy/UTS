<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Coffee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function transactions()
    {
        return $this -> hasOne(Transaction::class);
    }

    public function category()
    {
        return $this -> belongsToMany(CategoryCoffee::class);
    }
}
