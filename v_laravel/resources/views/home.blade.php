@extends('layouts/app')
@section('meta')


<title>Tienda Pokémon | Ecommerce online</title> 

<link rel="canonical" href="{{env('APP_URL')}}" />

<meta name="description" content="Tienda Online Caracas / Venezuela,cartas tcg,tazos,albums, Ofertas, Promociones, Descuentos en tiendapokemon.store">


<meta property="og:title" content="Tienda Pokémon | Ecommerce online" />
<meta property="og:description" content="Tienda Online Caracas / Venezuela,cartas tcg,tazos,albums, Ofertas, Promociones, Descuentos en tiendapokemon.store" />

<meta property="og:url" content="{{env('APP_URL')}}" />

<meta property="og:image" content="https://tiendapokemon.store/public/images/tiendapokemon.png" /> 



@endsection 

@section('content')


@if(!Auth::user())   
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>


@endif

<style type="text/css">
	

	.custom-info {
		padding: 4px;
		/*padding-top:0px;*/
			/*padding-bottom:  30px;
			padding-left: 30px;*/
		}

		p{
			font-size: 18px;  
		}


		
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

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

				<h1 class="display-4">What is Lorem Ipsum?</h1>
				<hr>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<br>
				<hr>
				<h2>Where does it come from?</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32</p>
				<br>
				<hr>
				<h3>Why do we use it?</h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				<br>
				<hr>


				<div class="row">

					@foreach($products as $product)

					<div class="col-sm-4">

						<div class="card">

							<div class="card-header">

								<a href="{{$product->maincategory_url}}/productos/{{ $product->url_name }}.{{ $product->maincategoryid }}.{{ $product->productid }}"><img src="{{URL('public/storage/uploads')}}/{{$product->product_img}}" alt="{{ $product->product_name }}" class="img-fluid">
								</a>							

								<h2>{{ $product->product_name }}</h2>

								<h3>${{ $product->price }}</h3>					


							</div>



						</div>

					</div>

					@endforeach

					<div class="pagination">

						{{-- {!! $products->links() !!} --}}
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




