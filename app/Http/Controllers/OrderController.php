<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Car;

class OrderController extends Controller
{
    public function index(){
        return view('pages.orders');
    }
    public function makeOrder($id){
        Order::create([
            'user_id' => Auth::user()->id,
            'car_id'=> $id
        ]);
        return redirect()->route('orders')->with('success', 'You have made a new order!');
    }

    public function destroy($id){
        $order = Order::firstOrFail()->where('car_id', $id);
        $order->delete();
        return redirect()->route('orders')->with('success', 'Your order has been canceled!');
    }

}
