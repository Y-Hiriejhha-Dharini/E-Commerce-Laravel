<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return View('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return View('detail',['product'=>$data]);
    }

    function search(Request $request)
    {
        $data = Product::where('name','like','%'.$request->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }

    function AddToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    static function CartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*', 'carts.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
            Cart::destroy($id);
            return redirect('cartlist');
    }
    
        function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
}
