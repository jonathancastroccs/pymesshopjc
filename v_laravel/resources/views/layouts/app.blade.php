<!DOCTYPE html>

<html lang="{{ 'es' }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

@yield('meta')


<meta name="author" content="{{env('APP_AUTHOR')}}">
<meta name="copyright" content="{{env('APP_COPYRIGHT')}}" /> 


@if(env("APP_ENV") == 'local')
 <link rel="icon" type="image/x-icon" href="{{env('PATH_LOCAL')}}/sistemaspymesjc.png" /> 

@endif

@if(env("APP_ENV") == 'production')
 <link rel="icon" type="image/x-icon" href="{{env('PATH_PRODUCTION')}}/sistemaspymes.png" />
@endif

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@if(Auth::user())
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endif   

{{--   estilos del template  --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
        /*body {
            font-family: 'Nunito', sans-serif;
            }*/

            /* ########################################### */
            /*                 Global                      */
            /* ########################################### */
            *{
              box-sizing: border-box;
            }

            html{
              font-size: 14px;
              font-family: 'Titillium Web', sans-serif;
              /*  background-color:rgb(0,0,0);*/
              background-color:white;
              /* color:#FEFEFE;*/
              color:blue;
            }

            a{
             /* color:#FF0042;*/
             color: #2577b1;
             text-decoration: none;
             font-weight: bolder;
             text-decoration: none;
           }

           h1{
            font-size:16px;
            font-weight: bolder;
          }


          /* ########################################### */
          /*           Forums.html                       */
          /* ########################################### */
          .container{
            margin: 20px;
            padding: 20px;
          }

          .subforum{
            margin-top:20px;
          }

          .subforum-title{
            /*  background-color:#292B2E;*/
          /*  background-color: #185886;  */
           background-color: white;   
            padding: 5px;
            border-radius: 5px;
            margin:4px;
          }

          .subforum-row{
            display: grid;
            grid-template-columns: 7% 60% 13% 20%;
          }

          .subforum-column{
            padding: 10px;
            margin:4px;
            border-radius: 5px;
            /* background-color:#111314;*/
            background-color:white;
          }

          .subforum-column-one{
            padding: 10px;
            margin:4px;
            border-radius: 5px;
            /* background-color:#111314;*/
            background-color:white;
          }

          .subforum-column-two{
            padding: 10px;
            margin:4px;
            border-radius: 5px;
            /* background-color:#111314;*/
            background-color:white;
          }

          .subforum-column-three{
            padding: 10px;
            margin:4px;
            border-radius: 5px;
            /* background-color:#111314;*/
            background-color:white;
          }

          .subforum-column-mini{
            padding: 1px;
            margin:4px;
            border-radius: 5px;
            /* background-color:#111314;*/
            background-color:white;
          }


          .subforum-description *{
            margin-block: 0;
          }

          .center{
            display: flex;
            justify-content: center;
            align-items: center;
          }

          .subforum-icon i{
            font-size: 45px;
          }

          .subforum-devider{
            display: none;   
          }


          /* For the smartphones */
          @media screen and (max-width: 460px) {
            .container{
              margin: 10px;
              padding: 10px;
            }

            .subforum-row{
              display: grid;
              grid-template-columns: 25% 75%;
              grid-template-rows: 65% 35%;
            }

            .subforum-devider{
              display: block;
              border: 0;
              height: 1px;
              background-image: linear-gradient(to right, rgba(190, 190, 190, 0), rgba(255, 255, 255, 0.75), rgba(190, 190, 190, 0));
            }



          }

          /* For the tablets */
          @media screen and (min-width: 460px) and (max-width: 1024px) {
            .container{
              margin: 15px;
              padding: 15px;
            }

            .subforum-row{
              display: grid;
              grid-template-columns: 10% 60% 10% 20%;
            }

            .subforum-icon i{
              font-size: 35px;
            }

            html{
              font-size: 14px;
            }

            h1{
              font-size: 16px;
            }

          }
          /*   Header Section    */

          header{
            margin-inline: 10px;
          }
          /* Nav Bar styles */
          .navbar{
            display:flex;
            align-items: center;
          }
          .navigation{
            background-color:#52057b;
            padding: 10px;
            width: 65%;
            display: inline-block;
            border-radius: 5px;
            max-height: 80px;
            margin-right:10px;
          }

          .close-icon i{
            font-size:60px;
            float: left;
            cursor: pointer;
          }

          .nav-list{
            list-style-type:none;
            overflow: hidden;
          }

          .nav-item a{
            float: right;
            display:block;
            text-align: center;
            margin-inline: 20px;
            font-size: 20px;
            padding: 10px;
            color:#fff;
          }

          .nav-item a:hover{
            background-color: rgb(0,0,0,0.1);
          }

          .hide{
            display: none;
          }

          .bar-icon{
            font-size: 60px;
            display: inline-block;
            margin-right:10px;
            color: #fff;
            cursor: pointer;
          }

          @font-face {
            font-family:aquire;
            src:url(aquire.otf);
          }

          .brand{
            font-size:60px;
            display: inline-block;
            font-family:aquire;
          }

          /*Navbar for the smartphones*/
          @media screen and (max-width: 460px){
            .navigation{
              max-height: auto;
            }

            .close-icon i{
              font-size:30px;
            }

            .nav-item a{
              float:left;
              display:inline;
              margin-inline: 3px;
              font-size: 10px;
              padding: 5px;
            }


            .bar-icon{
              font-size: 30px;
            }

            .brand{
              font-size:20px;
            }
          }

          /* Search Box styles */
          .search-box{
            border: solid 1px #52057b;
            margin-top: 20px;
            padding: 40px;
            display:flex;
            justify-content: center;
            box-shadow:1px 2px 3px #52057b;
          }

          .search-box select{
            padding: 10px;
          }

          .search-box input{
            padding: 10px;
          }

          .search-box button{
            padding: 10px;
            background-color:#fff;
            color:#000000;
          }

          .search-box button:hover{
            background-color: #000000;
            color: #fff;
            box-shadow: 1px 2px 3px #fff;
          }

          /* search box for smrtphones */
          @media screen and (max-width: 460px){
            .search-box input, .search-box button, .search-box select{
              min-width: 300px;
              margin-top: 5px;
            }    

          }

          /* forum info Styling */
          .forum-info{
            padding: 20px;
            background-color: #111314;
          }

          .chart{
            font-size:20px;
            font-weight:bold;
          }
          /* Footer Styling */

          footer{
            margin-top: 20px;
            padding: 20px;
            background-color:  #52057b;
            display: block;
            text-align: center;
          }

          /* ########################################### */
          /*            posts.html                       */
          /* ########################################### */

          /* posts table's head  */
          .table-head{
            display: flex;
          }

          .table-head div{
            padding: 5px;
            margin: 2px;
            /*    background-color: #2C2C2C;*/
            background-color: white;
            font-weight: bold;
          }

          .table-head .status{
            flex: 5%;
          }

          .table-head .subjects{
            flex: 70%;
          }

          .table-head .replies{
            flex: 10%;
          }

          .table-head .last-reply{
            flex: 15%;
          }

          /* posts table's body  */

          .table-row{
            display: flex;
          }

          .table-row .status, .table-row .subjects, .table-row .replies, .table-row .last-reply{
            padding: 5px;
            margin: 2px;
            /*  background-color: #131415;*/
            background-color: white;
          }

          .table-row .status{
            flex: 5%;
            font-size: 30px;
            text-align: center;
          }

          .table-row .subjects{
            flex: 70%;
          }

          .table-row .replies{
            flex: 10%;
          }

          .table-row .last-reply{
            flex: 15%;
          }

          /* navigation path*/
          .navigate{
            margin-block: 20px;
            font-weight: lighter;
            font-size: 24px;
          }

          .navigate a{
            color: #fff;
          }

          .navigate a:hover{
            color:#FF0042;
            font-weight: bolder;
          }

          /* Pagination*/

          .pagination{
            padding: 20px;
            font-size: 15px;
          }

          .pagination a{
            color: #fff;
            margin-inline: 5px;
            padding: 5px 10px;
            border: solid 0.5px #fff;
          }

          .pagination a:hover{
            opacity: 0.5;
          }

          .note{
            background-color:#111314;
            padding: 20px;
            display: block;
          }

          .note span{
            font-size: 20px;
            margin-block: 5px;
          }


          /* ########################################### */
          /*            detail.html                      */
          /* ########################################### */

          .head{
            display: flex;
            background-color: #2C2C2C;
            padding: 5px;
            font-weight: bold;
            font-size: 15px;
          }

          .authors{
            flex: 20%;
          }

          .content{
            flex: 80%;
          }

          .body{
            display: flex;
            /*  background-color: #131415;*/
            background-color: white;
            padding: 10px;
            margin-top: 5px;
          }

          .body .authors .username{
            font-size: 20px;
          }

          .body .authors img{
            max-width: 50px;
            max-height: 80px;
          }

          .body .content .comment button{
            border:none;
            padding:10px;
            font-weight: bolder;
            box-shadow: 4px 6px #fff;
            cursor: pointer;
            float: right;
          }

          /* comment section */
          .comment-area{
            margin-bottom:50px;
          }

          .comment-area textarea{
            width: 100%;
            min-height: 100px;
            padding: 10px;
            margin-block: 10px;
          }

          .comment-area input{
            float: right;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
          }

          .comment-area input:hover{
            border: solid 1px #000000;
          }


        </style>



        <style>

         @if(Auth::user())

        {{--  @if(Auth::user()->statu_id == 1 && Auth::user()->is_buyer == 1) --}}
        @if(Auth::user()->statu_id == 1 || Auth::user()->is_buyer == 0 || Auth::user()->is_buyer == 1 )

         body {
           /* background-color: #dfdfdf;*/
           background-color: {{Auth::user()->theme_color}};
         }

         @endif

         @else

         body {
          background-color: #cbcbcb;         
        }




        @endif

      </style>

      <script type="text/javascript">

        let BASE_URL = "{{ url('') }}";


      </script>



    </head>
    <body class="">
      <div class="min-h-screen bg-gray-100">
    

        <!-- Page Heading -->
        @if (isset($header))
        <header class="">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
          </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
       
       
       <!-- content -->
       @yield('content')

       <!-- content end-->
     </main>
   </div>
 </body>
 </html>
