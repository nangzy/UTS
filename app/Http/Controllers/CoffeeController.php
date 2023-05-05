<?php

namespace App\Http\Controllers;

use App\Models\CategoryCoffee;
use App\Models\Coffee;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function index(User $users)
    {
        return view('coffee',[
            'cat_coffees' => CategoryCoffee::all(),
            'user' => $users
        ]);
    }

    public function buy(Request $request) {
        
        Transaction::create([
            'user_id' => $request->user_id,
            'coffee_id' => $request->coffee_id,
            'date' => now('GMT+7')
        ]);

        $coffee = Coffee::findOrFail($request->coffee_id);
        $user = User::findOrFail($request->user_id);
        $user->increment('stars', $coffee->price / 1000);

        if($user->stars >= 200){
            $user->level = 'Gold Level';
            $user->colorcode = '#C6A961';
            $user->save();
        }
        
        return redirect()->route('confirmation.index', ['user' => $user->id])->with('success', 'Purchase successful!');
    }

    public function check($users)
    {
        $user = User::findOrFail($users);
        return view('check',[
            'user' => $user
        ]);
    }
}
