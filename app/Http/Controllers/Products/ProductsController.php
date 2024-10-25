<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Category;
use App\Models\Product\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Product\Cart;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
//use App\Http\Controllers\Products\Order;





class ProductsController extends Controller
{
    public function singleCategory($id)
    {
        $products = Product::select()->orderBy('id', 'desc')->where('category_id', $id)->get();

        return view('products.singleCategory', compact('products'));
    }




    public function singleProduct($id)
    {
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->get();

        $totalItemsInCart = 0;

        if (Auth::check()) {
            $totalItemsInCart = Cart::where('user_id', Auth::user()->id)->sum('qty');

            $checkInCart = Cart::where('prod_id', $id)
                ->where('user_id', Auth::user()->id)
                ->count();

            return view('products.singleproduct', compact('product', 'relatedProducts', 'checkInCart', 'totalItemsInCart'));
        } else {
            return view('products.singleproduct', compact('product', 'relatedProducts'));
        }
    }


    /*     public function singleProduct($id)
        {
            $product = Product::find($id);
            $relatedProducts = Product::where('category_id', $product->category_id)
                ->where('id', '!=', $id)
                ->get();

            if (isset(auth::user()->id)) {

                $checkInCart = Cart::where('prod_id', $id)
                    ->where('user_id', Auth::user()->id)
                    ->count();

                return view('products.singleproduct', compact('product', 'relatedProducts', 'checkInCart'));


            } else {
                return view('products.singleproduct', compact('product', 'relatedProducts'));

            }

        } */


    public function shop()
    {
        $categories = Category::select()->orderBy('id', 'desc')->get();

        $mostWanted = Product::select()->orderBy('name', 'desc')->take(5)->get();

        $vegetables = Product::select()->where('category_id', "=", 5)->orderBy('id', 'desc')->take(5)
            ->get();

        $meats = Product::select()->where('category_id', "=", 1)->orderBy('id', 'desc')->take(5)
            ->get();

        $fishes = Product::select()->where('category_id', "=", 2)->orderBy('id', 'desc')->take(5)
            ->get();

        $fruits = Product::select()->where('category_id', "=", 4)->orderBy('id', 'desc')->take(5)
            ->get();


        return view('products.shop', compact('categories', 'mostWanted', 'vegetables', 'meats', 'fishes', 'fruits'));
    }

    public function addToCart(Request $request)
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return Redirect::back()->withErrors(['error' => 'You must be logged in to add products to the cart']);
        }

        // Añadir al carrito
        $addCart = Cart::create([
            "name" => $request->name,
            "price" => $request->price,
            "qty" => $request->qty,
            "image" => $request->image,
            "prod_id" => $request->prod_id,
            "user_id" => Auth::user()->id,
            "subtotal" => $request->qty * $request->price
        ]);

        // Verificar si se añadió correctamente
        if ($addCart) {
            return Redirect::route("single.product", $request->prod_id)
                ->with('success', 'Product added to cart successfully');
        } else {
            return Redirect::back()->withErrors(['error' => 'Failed to add the product to the cart']);
        }
    }

    public function cart()
    {

        $cartProducts = Cart::select()->where('user_id', Auth::user()->id)
            ->get();

        $subtotal = Cart::select()->where('user_id', Auth::user()->id)->sum('subtotal');

        return View('products.cart', compact('cartProducts', 'subtotal'));
    }

    public function deleteFromCart($id)
    {

        $deleteCart = Cart::find($id);

        $deleteCart->delete();

        if ($deleteCart) {
            return Redirect::route("products.cart")
                ->with('delete', 'Product deleted from cart successfully');
        }
    }

    public function updateCart(Request $request, $id)
    {
        // Buscar el producto en el carrito por su ID
        $cartItem = Cart::find($id);

        if ($cartItem) {
            // Actualizar la cantidad (qty) y el subtotal
            $cartItem->qty = $request->qty;
            $cartItem->subtotal = $cartItem->qty * $cartItem->price;

            // Guardar los cambios
            $cartItem->save();

            // Redirigir con un mensaje de éxito
            return Redirect::route('products.cart')->with('success', 'Cart updated successfully');
        } else {
            // Si el producto no se encuentra en el carrito, mostrar un mensaje de error
            return Redirect::route('products.cart')->withErrors(['error' => 'Product not found in cart']);
        }
    }

    public function prepareCheckOut(Request $request)
    {
        $price = $request->price;

        $value = Session::put('value', $price);

        $newPrice = Session::get($value);

        if ($newPrice > 0) {
            return Redirect::route("products.checkout");

        }
    }

    public function checkout()
    {

        $cartItems = Cart::select()->where('user_id', Auth::user()->id)->get();
        $checkoutsubTotal = Cart::select()->where('user_id', Auth::user()->id)->sum('subtotal');

        return view('products.checkout', compact('cartItems', 'checkoutsubTotal'));
    }


    public function proccessCheckout(Request $request)
    {
        $checkout = Order::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "address" => $request->address,
            "town" => $request->town,
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "price" => $request->price,
            "user_id" => $request->user_id,
            "order_notes" => $request->order_notes
        ]);

        $value = Session::put('value', $request->price);

        $newPrice = Session::get($value);

        if ($checkout) {
            return Redirect::route("products.pay");
        }

    }

    public function payWithPaypal()
    {


        return view('products.pay');

    }

    public function success()
    {
        $deleteItemsFromCart = Cart::where('user_id', Auth::user()->id);

        $deleteItemsFromCart->delete();

        if ($deleteItemsFromCart) {

            Session::forget('value');
            return view("products.success");
        }


    }




























    /*public function addToCart(Request $request)
    {

        $addCart = Cart::create([
            "name" => $request->name,
            "price" => $request->price,
            "qty" => $request->qty,
            "image" => $request->image,
            "prod_id" => $request->prod_id,
            "user_id" => Auth::user()->id,
        ]);

        if ($addCart) {
            return Redirect::route("single.product", $request->prod_id)->withErrors(['success' => 'Product added to cart successfully']);

        }
    }*/
}


