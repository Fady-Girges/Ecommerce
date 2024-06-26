@extends('Layouts.master')
@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
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

{{-- <!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="assets/img/products/product-img-5.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>Green apples have polyphenols</h3>
                    <p class="single-product-pricing"><span>Per Kg</span> $50</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint dignissimos, rem commodi cum voluptatem quae reprehenderit repudiandae ea tempora incidunt ipsa, quisquam animi perferendis eos eum modi! Tempora, earum.</p>
                    <div class="single-product-form">
                        <form action="index.html">
                            <input type="number" placeholder="0">
                        </form>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        <p><strong>Categories: </strong>Fruits, Organic</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product --> --}}

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
                    <p class="product-price"  style="color: red;"> {{$product->price}}$ </p>
                    <a href="{{ route('products.addToCart', ['id' => $product->id]) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>







{{-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Products</span>
                <h2 class="mb-4">Related Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product position-relative">
                    <a href="#" class="img-prod">
                        <img class="img-fluid prod-img" src="{{url($item->imagepath)}}" alt="{{ $item->name }}">
                        <div class="overlay"></div>
                        <div class="text py-3 pb-4 px-3 text-center position-absolute w-100" style="bottom: 0;">
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="pricing ">
                                    <p class="price"><del class="mr-2 price-dc">{{$item->oldprice}}</del><span class="price-sale" style="color: red;">{{$item->price}}</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex justify-content-center align-items-center px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}


<!-- end more products -->

{{-- <!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel --> --}}

@endsection
