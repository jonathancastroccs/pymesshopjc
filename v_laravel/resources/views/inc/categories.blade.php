<div class="row offset-2">
	<div class="">

			<form method="POST" action="" id="logForm">
				

				<div class="input-group">
					<input type="text" id="findPost" class="form-control" placeholder="Buscar Producto">
					<div class="input-group-append">
						<button class="btn btn-danger" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form>

		</div>
	</div>
	<br>


	@foreach($categorys2 as $category)

	<div class="ubforum-row">

		<div class="ubforum-description subforum-column" style="float:left">

			<a class="nav-link" href="/categoria/{{ $category->maincategory_url  }}">{{ $category->maincategory_name }} </a>

		</div>

	</div>


	@endforeach

	<br>
	<br>
	<br>
	<br>



	<div class="temporal">	
		

	</div>



	<div id="msg_info"></div>




	<script type="text/javascript">


		$("#logForm").submit(function(event) {
			event.preventDefault();

			let post = $("#findPost").val();


			$.post(BASE_URL + '/api/find/post',
			{       
				post: post 
			}, function(result) {  




				$(".subforum").hide();

				$(".posts-table").empty();


				$.each(result['findpost'], function(index, val) {

					let datc = new Date(val.created_at);



					let datu = new Date(val.updated_at);





					$(".temporal").append(
						`<div class="posts-table">
    		<div class="col-sm-4">
    		<div class="card">
    		<div class="card-header">
    		<a href="/${val.maincategory_url}/productos/${val.url_name }.${val.maincategoryid }.${val.productid }"><img src="https://tiendapokemon.store/public/storage/uploads/${val.product_img}" alt="${val.product_name }" class="img-fluid">
    		</a>
    		<h2>${val.product_name }</h2>
    		<h3>$${val.price }</h3>	
    		</div>						
    		</div>
    		</div>		
    		</div>    		
					`)   	



				});






				if (result['findpost'] == '') {    

					$("#msg_info").html('<p class="alert alert-danger text-dark">No se encontraton resultados en este producto</p>');

				}





			})
			.fail(function(data, textStatus, xhr) {


				$("#msg_errors").html('<p>Request failed, Error Status'+ data.status +'</p>');

			});




		});



	</script>




