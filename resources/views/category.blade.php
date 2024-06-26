@extends('Layouts.master')
@section('content')


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Categories</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h4>We have three different types of healthy foods that must be quenched after eating with our fresh juices</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .category-img {
        width: 100%;
        height: 250px; /* يمكن تعديل هذا الرقم حسب الاحتياجات */
        object-fit: cover; /* يحافظ على نسبة العرض إلى الارتفاع ويقطع أي جزء زائد */
    }
    .category-overlay {
       position: absolute;
        bottom: 0;
        left: 0 ;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5); /* لون خلفية النص */
        color: #fff; /* لون النص */
        text-align: center; /* توسيط النص أفقيًا داخل الصورة */
        padding: 10px; /* تباعد النص عن الحواف */
    }
</style>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-lg-6">
                            <div class="category-wrap ftco-animate mb-4 position-relative">
                                <div class="overflow-hidden">
                                    <img src="{{ url($category->imagepath) }}" class="img-fluid category-img" alt="{{ $category->name }}">
                                    <div class="category-overlay">
                                        <div class="text px-3 py-1">
                                            <h2 class="mb-0"><a href="/product/{{$category->id}}">{{ $category->name }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>






@endsection
