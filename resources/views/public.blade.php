<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.css')
</head>

<body>

  <!--==========================
  Header
  ============================-->
  @include('layouts.header')


  
  <!--==========================
    Hero Section
  ============================-->

      @include('layouts.hero')


  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
   @include('layouts.about')



    <!--==========================
      Facts Section
    ============================-->
      @include('layouts.facts')

    <!--==========================
      Services Section
    ============================-->
      @include('layouts.services')

    <!--==========================
    Call To Action Section
    ============================-->

        @include('layouts.calltoaction')

    <!--==========================
      Portfolio Section
    ============================-->
        @include('layouts.portfolio')

    <!--==========================
      Team Section
    ============================-->
        @include('layouts.team')
    
   
    <!--==========================
      Contact Section
    ============================-->
        @include('layouts.contact')

  </main>

  <!--==========================
    Footer
  ============================-->
        @include('layouts.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="home/lib/jquery/jquery.min.js"></script>
  <script src="home/lib/jquery/jquery-migrate.min.js"></script>
  <script src="home/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="home/lib/easing/easing.min.js"></script>
  <script src="home/lib/wow/wow.min.js"></script>
  <script src="home/lib/waypoints/waypoints.min.js"></script>
  <script src="home/lib/counterup/counterup.min.js"></script>
  <script src="home/lib/superfish/hoverIntent.js"></script>
  <script src="home/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="home/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="home/js/main.js"></script>

</body>
</html>
