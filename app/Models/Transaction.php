<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded= ['id'];

    public function coffee()
    {
        return $this -> belongsTo(Coffee::class);
    }

    public function users()
    {
        return $this -> belongsToMany(User::class);
    }


}
