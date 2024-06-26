<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB; // استيراد الواجهة للتفاعل مع قاعدة البيانات

class ProductController extends Controller
{
    public function index($catid = null) // تحديد اسم الدالة وتمرير وسيطة لها
    {
        if (!$catid){
            $result = DB::table('products')->get();
            return view('product', ['products' => $result]);
        } else {
            $result = DB::table('products')->where('category_id', $catid)->get();
            return view('product', ['products' => $result]);
        }
    }

    public function addToCart($id)
    {
        // product::create([
        //     'product_id' => $id,
        //     // يمكنك هنا إضافة أي معلومات إضافية عن المنتج إلى جدول العربة
        // ]);

        // return redirect()->back()->with('success', 'Product added to cart successfully.');
    //     $product = Product::find($id);

    //     if(!$product) {
    //         abort(404);
    //     }

    //     $cart = session()->get('cart');

    //     // إذا لم يكن السلة موجودة، قم بإنشائها
    //     if(!$cart) {
    //         $cart = [
    //             $id => [
    //                 'name' => $product->name,
    //                 'quantity' => 1,
    //                 'price' => $product->price,

    //             ]
    //         ];

    //         session()->put('cart', $cart);

    //         return view('page.cart')->with('success', 'Product added to cart successfully!');
    //     }

    //     // إذا كان المنتج موجودًا في السلة، زد الكمية بواحد
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //         session()->put('cart', $cart);

    //         return view('page.cart')->with('success', 'Product added to cart successfully!');
    //     }

    //     // إذا لم يكن المنتج موجودًا في السلة، أضفه كعنصر جديد
    //     $cart[$id] = [
    //         'name' => $product->name,
    //         'quantity' => 1,
    //         'price' => $product->price,
    //     ];

    //     session()->put('cart', $cart);

    //     return view('page.cart')->with('success', 'Product added to cart successfully!');
     }

}
