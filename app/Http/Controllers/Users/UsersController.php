<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Product\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;



class UsersController extends Controller
{
    public function myOrders()
    {
        $orders = Order::select()->where('user_id', Auth::user()->id)->get();

        return view('users.myorders', compact('orders'));
    }

    public function settings()
    {

        $user = User::find(Auth::user()->id);

        return view('users.settings', compact('user'));
    }


    public function updateUserSettings(Request $request, $id)
    {
        Request()->validate([
            "email" => "require|max:40",
            "name" => "require|max:40",
        ]);

        $user = User::find($id);

        $user->update($request->all());

        if ($user) {
            return Redirect::route("users.settings")->with(['update' => 'Product updated to cart successfully']);
            //return Redirect::route("users.settings")->with('update', 'User settings updated successfully.');
        }

    }



}
