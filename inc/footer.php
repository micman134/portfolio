<section class="footer">
	<!-- Footer Start -->
    <div class="container-fluid text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
             
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-dark"> 
                      <center>  <?php echo date('Y'); ?>
                       Copyright &copy; <a class="border-bottom" href="">Solvibes</a>, All Right Reserved.</center>
                        
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


</section>



     <script src="js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/counterup.min.js"></script>

<script>
      new WOW().init();
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1, // Display one item at a time
            autoplay:true, // Autoplay enabled
            autoplayTimeout:5000, // Autoplay interval in milliseconds (5 seconds)
            autoplayHoverPause:true, // Pause autoplay when hovering over the carousel
            animateOut: 'slideOutLeft', // Specify the animation effect for transitioning out of a slide
            animateIn: 'slideInRight' // Specify the animation effect for transitioning into a slide
        });
    });

   
     // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
   
</script>





    </body>
</html>