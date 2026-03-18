@extends('layouts/app')
@section('title','SubCategory')
@section('content')
@include('inc/navbar')

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<style type="text/css">

	/*#editor {
		padding: 200px !important;
		}*/

		.ck.ck-editor__editable_inline>:last-child {
			margin-bottom: 250px;
		}
/*
	#mainContent div.FCKEditor {
		margin: 0 -14px 0 -6px;width: 
		}*/

	</style>

	<div class="row">

		<div class="container">

			@if(Auth::user()->is_banned == 1)
			<p class="display-4">Baneado por incumplir las reglas del sitio</p>
			@endif

			{{-- <div class="col-8 offset-2">

				<h1 class="bg-white">Publicar Tema</h1>
			</div> --}}

			{{-- <a href="" class="btn btn-warning">Publicar Tema</a> --}}



			<div class="bg-white">

				<div class="col-8 offset-2">

					<h1 class="display-4">Publicar Producto</h1>
					<br>
					{{-- <h2>5 Temas únicos para usuarios Free y 20 para Premium</h2> --}}
					<hr>
				</div>

				<br>

				<br>

				<div class="col-8 offset-2">

					@if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1 && Auth::user()->is_verified == 1 && Auth::user()->is_banned == 0 || Auth::user()->statu_id == 1 &&  Auth::user()->is_buyer == 0 && Auth::user()->is_verified == 1 && Auth::user()->is_banned == 0)	

					<form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}

						<select class="form-control" name="maincategory_id" id="maincategory_id">
							<option id="option" value="">Categoria</option>
							@foreach($mcategory as $category)
							{{-- <option id="option" value="">Estado</option> --}}
							<option value="{{$category->id}}">{{$category->maincategory_name}}</option>
							@endforeach						     
						</select>	

						<input type="text" class="form-control form-control-user" name="product_name" id="postal_code"  placeholder="Product Name">
						@if($errors->has('product_name'))
						<div class="text-danger" id="msg_email">{{ $errors->first('product_name') }}</div>
						@endif

						<label for="img">Producto Imagen 1:
						<br>  
							<input type="file" name="product_img">

							<label for="img">Producto Imagen 2:
							<br>  
							<input type="file" name="product_imggo">



								{{-- <input type="hidden" name="maincategory_id" id="maincategory_id" value="{{$categoryid}}"> --}}

							<input type="number" class="form-control form-control-user" name="price" id="price"  placeholder="Precio">

							@if($errors->has('price'))
							<div class="text-danger" id="msg_email">{{ $errors->first('price') }}</div>
							@endif

							<input type="number" class="form-control form-control-user" name="unit" id="unit"  placeholder="Unidades">

							@if($errors->has('unit'))
							<div class="text-danger" id="msg_email">{{ $errors->first('unit') }}</div>
							@endif	


							<select class="form-control" name="type_id" id="type_id">
								<option id="option" value="">Estado</option>
								@foreach($types as $type)
								{{-- <option id="option" value="">Estado</option> --}}
								<option value="{{$type->id}}">{{$type->type_name}}</option>
								@endforeach						     
							</select>					




							@if($errors->has('product_content'))
							<div class="text-danger" id="msg_email">{{ $errors->first('product_content') }}</div>
							@endif

							<textarea name="product_content" id="editor">

							</textarea>


							{{--     end --}}
							<br>
							<div class="form-group">

								<div class="offset-2 col-sm-8" >                                       

									<button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

								</div>

							</div>   

						</form>       


						<br>

						<br>


					</div>

					@endif

					{{-- 	end publicar ban --}}




				</div>


			</div> 

		</div>

		<script>

	ClassicEditor
	.create( document.querySelector( '#editor' ), {
		link: {
			decorators: {               
                openInNewTab: {
                	mode: 'manual',                  
                    defaultValue: true,			
                    attributes: {
                    	target: '_blank',                    
                        rel: 'nofollow',
                    }
                }
            }
        }
        
 	} )
	.then( /* ... */ )
	.catch( /* ... */ );
</script>

@endsection 






