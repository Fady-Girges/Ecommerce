@extends('Layouts.master')
@section('content')

<!-- home page slider -->
<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">All kinds of healthy food</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh Everyday</p>
                            <h1>100% Organic Collection</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Mega Sale Going On!</p>
                            <h1>Get December Discount</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

    <style>
        .prod-img {
            width: 100%;
            height: 250px; /* يمكن تعديل هذا الرقم حسب الاحتياجات */
            object-fit: cover; /* يحافظ على نسبة العرض إلى الارتفاع ويقطع أي جزء زائد */
        }
    </style>

    <!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image prod-img">
						<img src="assets/img/products/product-img-1.jpg" alt="">
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> $30 </p>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image prod-img">

                                <img src="images\Chicken paneer.jpg" alt="">
						</div>
						<h3>Chicken paneer</h3>
						<p class="product-price"><span>Per Kg</span> $120 </p>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image prod-img">
							<img src="images\Lemon.jpeg" alt="">
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> $15 </p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<style>
        .category-img {
            width: 100%;
            height: 250px; /* يمكن تعديل هذا الرقم حسب الاحتياجات */
            object-fit: cover; /* يحافظ على نسبة العرض إلى الارتفاع ويقطع أي جزء زائد */
        }
        /* .category-overlay {
           position: absolute;
            bottom: 0;
            left: 0 ;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5); 
            color: #fff;
            text-align: center;
            padding: 10px;
        } */
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
                                                <h2 class="mb-0"></h2>
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
