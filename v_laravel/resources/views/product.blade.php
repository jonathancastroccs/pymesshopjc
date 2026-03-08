@extends('layouts/app')

@section('meta')

<title>{{ $product->product_name }} | Tienda Cerca de mi</title>


<link rel="canonical" href="https://tiendapokemon.store{{$product->maincategory_url}}/productos/{{$product->url_name}}.{{ $product->maincategoryid }}{{ $product->productid }}" />




<meta name="description" content="Compra venta en caracas / la guaira de {{$product->product_name}}, ofertas, descuentos, promociones en tiendapokemon.store">

<meta property="og:type" content="website" />


<meta property="og:title" content="{{ $product->product_name }} | Tienda Cerca de mi" />


<meta property="og:description" content="Compra venta en caracas / la guaira de {{$product->product_name}}, ofertas, descuentos, promociones en tiendapokemon.store" />

<meta property="og:url" content="https://tiendapokemon.store{{$product->maincategory_url}}/productos/{{$product->url_name}}.{{ $product->maincategoryid }}{{ $product->productid }}" /> 

<meta property="og:image" content="{{URL('public/storage/uploads')}}/{{ $product->product_img }}" /> 




@endsection 

@section('content')



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style type="text/css">
	
	p{
		font-size: 18px;	
	}
	/*body {
			margin:0px;
			}*/

			.whatsapp-btn {
				position: fixed;
				bottom: 20px;
				right: 20px;
				z-index: 9999;
				width: 60px;
				height: 60px;
				border-radius: 50%;
				background-color: #25D366;
				display: flex;
				align-items: center;
				justify-content: center;
				box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
				animation: breathe 2s ease-in-out infinite;
			}

			/*Estilos solo al icono whatsapp*/
			.whatsapp-btn i {
				color: #fff;
				font-size: 24px;
				animation: beat 2s ease-in-out infinite;
				text-decoration: none;
			}

			/*Estilos con animation contorno respirando*/
			@keyframes breathe {
				0% {
					box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
				}
				70% {
					box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
				}
				100% {
					box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
				}
			}

			/*Estilos de animacion del icono latiendo*/
			@keyframes beat {
				0% {
					transform: scale(1);
				}
				50% {
					transform: scale(1.2);
				}
				100% {
					transform: scale(1);
				}
			}

			h1 {
				font-family: "Fantasy", Copperplate;
				color: white;
				text-shadow: 2px 2px 4px #000000;
			}

			h2 {
				color: white;
				text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
			}
			

			/*p {
				font-family: "Lucida Console", "Courier New", monospace;
				}*/


				.intro-section {
					margin-top: -16px;
				}

				.intro-section {
					background-attachment: fixed;
					background-color: #222;
					background-size: cover!important;
					-webkit-background-size: cover!important;
					-moz-background-size: cover!important;
					background-attachment: fixed;
					background-position: center center!important;
					background-repeat: no-repeat!important;
					padding: 170px;
				}

				.intro-section {			
					background: url(https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=947&q=80);
					background-attachment: fixed;
				}

				.intro-section p, .intro-section .textwidget, .intro-section .widgettitle {
					color: #ffffff!important;
				}

				.intro-section .widgettitle {
					font-size: 62px;
					text-transform: uppercase;
					font-weight: 700;
					color: #fff;
				}

				.intro-section h3 {
					font-size: 50px!important;
				}

				.widgettitle {
					text-align: center!important;
					margin-bottom: 30px;
					margin-top: 30px;
					font-weight: 600;
				}


				.main-content .item img{
					display: block;
					width: 100%;
					height: auto;     
					margin-bottom: 20px;
					border-radius: 12px;       
				}

				.main-content {
					position: relative;
				}

				.custom-nav
				{
					position: absolute;
					top: 20%;
					left: 0;
					right: 0;
				}

				.owl-prev, .owl-next {
					position: absolute;
					height: 100px;
					color: inherit;
					background: none;
					border: none;
					z-index: 100;
				}

				/*i {
					font-size: 2.5rem;
					color: green;
					}*/


					.owl-prev {
						left: 0;
					}

					.owl-next {
						right: 0;
					}

					@media screen and (max-width: 600px) {

			/*.widgettitle{
				font-size: 10px !important;
				}*/

			/*h1,h2,p{
				font-size: 16px;
				}*/

			}


			@media screen and (max-width: 768px){

     /* ul li {
        display: block;
    }
    ul {
        display: none;
        }*/

        #demo {
        	display: block;
        }
        #demo {
        	display: none;
        	visibility: hidden;
        }


        #demo1 {
        	display: block;
        }
        #demo1 {
        	display: none;
        	visibility: hidden;
        } 

        h1,h2,p,footer{
        	font-size: 16px;
        }

        /* h3{
        	font-size: 20px;
        	}*/

        	.intro-section h3 {
        		font-size: 20px!important;
        	}


        }

        @media screen and (min-width: 1200px){


        	#closebtn {           
        		visibility: hidden;
        	}

        }



    </style>



    @include('inc/navbar')
  

    <div class="row">

        <div class="col-12">

            @include('inc/categories')

        </div>

    </div>
    <br>

    <div class="subforum">

    <div class="row">


    	<div class="col-4 offset-2">

    		<a href="https://wa.me/+5804241666224?text=Hola necesito ayuda con+{{'web development'}}"  target="_blank" class="whatsapp-btn" data-toggle="tooltip" title="Hola estoy online">
    			<i class="bi-whatsapp"></i>    		

    			<a />

    	

    				<img src="{{URL('public/storage/uploads')}}/{{$product->product_img}}" alt="{{ $product->product_name }}" class="img-fluid">

    				<br>
    				<hr>
    				<div class="main-content">


    					<div class="owl-carousel owl-theme">
    						<div class="item">
    							<img src="{{URL('public/storage/uploads')}}/{{$product->product_img}}" alt="Picture 1">
    						</div>
    						<div class="item">
    							<img src="{{URL('public/storage/uploads')}}/{{$product->product_imggo}}" alt="Picture 2">
    						</div>
    						<div class="item">
    							<img src="{{URL('public/storage/uploads')}}/{{$product->product_imggt}}">
    						</div>						
    					</div>
    					<div class="owl-theme">
    						<div class="owl-controls">
    							<div class="custom-nav owl-nav"></div>
    						</div>
    					</div>


    				</div>

                    @if($product->instagram_url)

                    <a href="https://www.instagram.com/p/{{ $product->instagram_url }}" class="fa-brands fa-instagram btn btn-danger" target="_blank" rel="nofollow">Ver en Instagram</a> 


                    @endif

                    @if($product->mlibre_url)

                    <br>

                    <a href="{{ $product->mlibre_url }}" class="fa-solid fa-cart-shopping btn btn-warning" target="_blank" rel="nofollow">Comprar en Mercadolibre</a> 


                    @endif    


                </div>



                <div class="col-6">

                    <h1 class="display-4">{{$product->product_name}}</h1>
                    <hr>
                    {!! $product->product_content !!}
                    <br>
                    <p>Precio: ${{$product->price}}</p>
                    <br>
                    <p>Unidades: {{$product->unit}}</p>
                    <br>

                    <p class="{{$product->type_color}}">Estado: {{$product->type_name}}</p>


                </div>






            </div>

            <div class="row">

             <div class="col-8 offset-2">

                <hr>

                <div class="main-content">


                   <div class="owl-carousel owl-theme">
                      <div class="item">
                         <img src="{{URL('public/storage/uploads')}}/{{$product->product_img}}" alt="Picture 1">
                     </div>
                     <div class="item">
                         <img src="{{URL('public/storage/uploads')}}/{{$product->product_imggo}}" alt="Picture 2">
                     </div>
                     <div class="item">
                         <img src="{{URL('public/storage/uploads')}}/{{$product->product_imggt}}">
                     </div>						
                 </div>
                 <div class="owl-theme">
                  <div class="owl-controls">
                     <div class="custom-nav owl-nav"></div>
                 </div>
             </div>


         </div>

     </div>

 </div>


 <div class="row">

     <div class="col-8 offset-2">

        <img src="{{URL('public/images')}}/tienda_banner.png" alt="Banner de tienda" class="img-fluid">

    				

    					</div>

    				</div>

                    {{-- end subforum --}}
                </div>



    				<script type="text/javascript">
    					$(document).ready(function() {

    						$(".main-content .owl-carousel").owlCarousel({
    							stagePadding: 50,
    							center: true,  
    							navigation : true,
    							slideSpeed : 300,
    							paginationSpeed : 400,
    							items : 2, 
    							itemsDesktop : false,
    							itemsDesktopSmall : false,
    							itemsTablet: false,
    							itemsMobile : false,         
    							autoplay: false,
    							margin: 20,                         
    							loop:true,
    							dots: false,
    							nav:false,
    							navText: [
    							'<i class="fa fa-angle-left" aria-hidden="true"></i>',
    							'<i class="fa fa-angle-right" aria-hidden="true"></i>'
    							],
    							navContainer: '.main-content .custom-nav',                          
    							responsive: {
    								0: {
    									items: 1                                        
    								},
    								600: {
    									items: 2                                            
    								},
    								1000: {                     
    									items: 2


    								}
    							},



    						});

    					});
    				</script>

    				<script>
    					$(document).ready(function(){
    						$('[data-toggle="tooltip"]').tooltip();
    					});
    				</script>



    				@include('inc/footer')
    				@endsection 



