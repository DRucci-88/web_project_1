<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Ebook;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $account = [];
        if (session()->has('auth')){
            $account = Account::all()->find(session('auth')->id);
        }
        return view('cart', [
            'orders' => $account->orders
        ]);
    }

    public function rent(Ebook $ebook)
    {
        // dd($ebook);
        if (session()->has('auth')) {
            Order::query()->create([
                'account_id' => session('auth')['id'],
                'ebook_id' => $ebook->id,
                'order_date' => now()
            ]);
            return redirect('/cart');
        }
        return redirect('/');
    }
}
