<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductsController extends Controller
{
    public function index()
    {
        $producto = Producto::all();
 
        return view('cart.products', compact('producto'));
    }
 
    public function cart()
    {
        return view('cart.cart');
    }
    public function addToCart($id)
    {
        $product = Producto::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "nombre" => $product->nombre,
                        "quantity" => 1,
                        "imagen" => $product->imagen,
                        "precio" => $product->precio
                        
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "nombre" => $product->nombre,
            "quantity" => 1,
            "imagen" => $product->imagen,
            "precio" => $product->precio
            
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    //
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }

}
/*YONG FOOD
Token Service:
7a4a794e3068386358776b4c506f35376866454545796c396f324f464f4a4a63

Token Secret:
5031724259634f4c706a726754657054326d46354e6d5863566d567a374b3532

Recurrencia: PAYPERUSE

Plan Relacionado: INDEPENDIENTE TRIAL (3 Meses // 2.95 )

Habilitado: 1

Válido Hasta: 28-05-2019

Fecha de Creación: 28-05-2019

Fecha de Actualización: 28-05-2019

URL Servicio: http://localhost/phpmyadmin/sql.php?db=projec*/