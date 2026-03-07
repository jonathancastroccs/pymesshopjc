@extends('layouts/app')

@section('meta')

@if(!empty($mmaincategorys))

<title>{{ $mmaincategorys->maincategory_name.' - '.'Tienda Pokemon Online' }}</title> 


<link rel="canonical" href="https://tiendapokemon.store/{{$mmaincategorys->maincategory_url}}" />

<meta name="description" content="Compra Venta en Productos de {{$mmaincategorys->maincategory_name}} en tiendapokemon.store">

<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $mmaincategorys->maincategory_name.' - '.'Tienda Pokemon Online' }}" />
<meta property="og:description" content="Compra Venta en Productos de {{$mmaincategorys->maincategory_name}} en tiendapokemon.store" />

<meta property="og:url" content="https://tiendapokemon.store/{{$mmaincategorys->maincategory_url}}" /> 

@endif



@endsection 

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<style type="text/css">
	

	.custom-info {
		padding: 4px;			
	}


</style>

@include('inc/navbar')


<div class="row">

	<div class="col-12">

		@include('inc/categories')

	</div>

</div>
<br>


<div class="row subforum">

	<div class="container">

		<div class="card">

			<div class="card-body">

				

				@if(is_null($products[0]))


				<div class="bg-info text-center">
					<p>No hay productos publicados en la categoria {{$mmaincategorys->maincategory_name}}</p>
				</div>



				@endif


				<div class="row">

					@foreach($products as $product)

					<div class="col-sm-4">

						<div class="card">

							<div class="card-header">
								

								<a href="/{{$product->maincategory_url}}/productos/{{ $product->url_name }}.{{ $product->maincategoryid }}.{{ $product->productid }}"><img src="{{URL('public/storage/uploads')}}/{{$product->product_img}}" alt="{{ $product->product_name }}" class="img-fluid">
								</a>
								

								<h2>{{ $product->product_name }}</h2>
								
								<h3>${{ $product->price }}</h3>





							</div>

							

						</div>

					</div>

					@endforeach

					<div class="pagination">

						{!! $products->links() !!}
					</div>				



				</div> 

				<!-- end row -->



				<br>

			</div>

		</div>

	</div>

</div>


@include('inc/footer')

@endsection 






