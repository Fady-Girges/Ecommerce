<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
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

   

}
