<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{


    public function addcart(Request $request ,$id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $product=product::find($id);

            $cart=new Cart;

            $cart->name=$user->name;

            $cart->product_name=$product->name;

            $cart->product_imagepath=$product->imagepath;

            $cart->price=$product->price;

            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back()->with('message','Product Added Successfully');
        }

        else
        {
            return redirect('login');
        }
    }

        public function cart()
        {
            $user=auth()->user();
            $cart=Cart::where('name',$user->name)->get();
            $count=Cart::where('name',$user->name)->count();
            return view('page.cart',compact('count','cart'));

        }

public function deletecart($id)
{

$data=Cart::find($id);
$data->delete();
return redirect()->back();


}
// function order()
// {
//     $userId=Session::get('user')['id'];
//     $total=$products= DB::table('cart')
//     ->join('products','cart.product_id','=','products.id')
//     ->where('cart.user_id',$userId)
//     ->sum('products.price');

//     return view('Page.checkout',['total'=>$total]);
// }

// function orderPlace(Request $req)
// {
//     $userId=Session::get('user')['id'];
//     return $allCart= Cart::where('user_id',$userId)->get();
//     return $req->input();
// }


}
