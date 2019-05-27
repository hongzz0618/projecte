<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductsController extends Controller
{
    public function index()
    {
        return view('cart.products');
    }
 
    public function cart()
    {
        return view('cart.cart');
    }
    public function addToCart($id)
    {
 
    }
    //
}
