{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}

{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> --}}

<div class="row offset-2">
	<div class="">
		{{-- <form> --}}
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








