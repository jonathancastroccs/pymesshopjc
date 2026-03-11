<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-white" style="background-color: black">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Siguenos en nuestras redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>

       @if(!Request::segment(1) == '/')    
      
      <a href="https://www.instagram.com/sistemaspymesjc" rel="nofollow" target="_blank" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>

       <a href="https://www.youtube.com/@sistemaspymesjc" rel="nofollow" target="_blank" class="me-4 text-reset">
        <i class="fab fa-youtube"></i>
      </a>

       <a href="https://www.tiktok.com/@sistemaspymesjc" rel="nofollow" target="_blank" class="me-4 text-reset">
        <i class="fab fa-tiktok"></i>
      </a>


   

       @endif
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Tienda Pokemon
          </h6>
          <p>
            Tienda Online de Productos del anime Pokemon
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Servicios
          </h6>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Conócenos
          </h6>
          <p>
            <a href="/sobre-nosotros" class="text-reset">Sobre Nosotros</a>
          </p>
          <p>
            <a href="/politica-de-privacidad" class="text-reset">Política de Privacidad</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4"><a href="/contacto" class="text-reset">Contacto</a></h6>
          <p><i class="fas fa-home me-3"></i> Caracas/Venezuela</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            sistemaspymesjc@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 58 0424-166-6224</p>          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

 @if(!Request::segment(1) == '/')    


  <div class="text-center p-4" id="my_footer"  style="background-color: rgba(0, 0, 0, 0.05);">
    © 2018 - {{date('Y')}}  Copyright:    
     Website developed by {{env('APP_AUTHOR')}}
    <a class="text-reset fw-bold" id="f_info" target="_blank" href="{{env('APP_ENDPOINT')}}">{{env('APP_COPYRIGHT')}}</a>
  </div>

  @else

 <div class="text-center p-4" id="my_footer" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2018 - {{date('Y')}} Copyright:    
     Website developed by {{env('APP_AUTHOR')}}
    <a class="text-reset fw-bold" id="f_info">{{env('APP_COPYRIGHT')}}</a>
  </div>

  @endif
 
</footer>
<!-- Footer -->