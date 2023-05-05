<?php

namespace App\Http\Controllers;

use App\Models\CategoryCoffee;
use App\Models\Coffee;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(User $users)
    {
        return view('transaction',[
            'user' => $users,
            'coffees' => Coffee::all(),
            'cat_coffees' => CategoryCoffee::all()
        ]);
    }
}
