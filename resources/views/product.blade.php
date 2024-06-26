@extends('Layouts.master')
@section('content')



<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">

            @if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert"></button>
    {{session()->get('message')}}
</div>
@endif
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Single Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->



<!-- more products -->

<style>
    .prod-img {
        width: 100%;
        height: 250px; /* يمكن تعديل هذا الرقم حسب الاحتياجات */
        object-fit: cover; /* يحافظ على نسبة العرض إلى الارتفاع ويقطع أي جزء زائد */
    }
</style>


<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Related</span> Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image prod-img">
                        <a href="/product">
                            <img src="{{url($product->imagepath)}}" alt=""></a>
                    </div>
                    <h3>{{$product->name}}</h3>
                    <p class="product-price"  style="color: red;"> ${{$product->price}}</p>
                     {{-- <a href="#" wire.click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a> --}}
                     <form action="{{url('addcart',$product->id)}}" method="POST">
                        @csrf
                        <input type="number" value="1" min="1" class="form-control" style="width: 350px; text-align: center; font-size: 34px;" name="quantity">


                     <input class="fas fa-shopping-cart" type="submit" value="Add to Cart">
                    </form>
               </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@endsection
