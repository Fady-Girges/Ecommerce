
@extends('Layouts.master')
@section('content')

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    {{-- <th class="product-total">Total</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $carts)
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a href="{{url('delete',$carts->id)}}"><i class="far fa-window-close"></i></a></td>
                                        <td class="product-image"><img src="{{ $carts->product_imagepath }}" alt=""></td>
                                        <td class="product-name">{{ $carts->product_name }}</td>
                                        <td class="product-price">${{ $carts->price }}</td>
                                        <td class="product-quantity"><input type="number" value="{{ $carts->quantity }}" placeholder="0"></td>
                                        <!-- Add other columns if needed -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">

							<tbody>

							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="/checkout" class="boxed-btn black">Check Out</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

    @endsection



