<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Routing\Controller;


class HomeController extends Controller
{

    public function index()
    {
        $randomProduct = Product::inRandomOrder()->take(12)->get();
        dd($randomProduct);
        return view('Home');
    }
    public function contact()
    {
        return view('Contact');
    }

    public function shop()
    {
        return view('Shop');
    }

    public function shopShow()
    {
        return view('ShopShow');
    }

    public function cart()
    {
        return view('Cart');
    }

    public function checkout()
    {
        return view('Checkout');
    }

    public function checkoutSuccess()
    {
        return view('CheckoutSuccess');
    }

    public function orders()
    {
        return view('Orders');
    }
}