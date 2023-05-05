<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use  HasFactory;
    protected $guarded= ['id'];

    public function transactions()
    {
        return $this -> hasMany(Transaction::class);
    }
}
