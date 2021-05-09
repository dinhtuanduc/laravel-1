<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;

class LienheController extends Controller
{
    public function index()
    {
        echo "<br> INDEX";
        echo __METHOD__;
    }
    public function test()
    {
        Cart::add(455, 'Sample Item', 100.99, 2, array());
        return redirect('/cart');
    }
    public function cart()
    {
        return Cart::getContent();
    }
}
