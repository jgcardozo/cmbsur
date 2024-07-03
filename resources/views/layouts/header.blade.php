   <header id="header" class="fixed-top header-transparent">
       <div class="container d-flex align-items-center justify-content-between position-relative">

           <div class="logo">
               <h1 class="text-light"><a href="#"><img src="{{ asset('img/cmb-logo.webp') }}" /></a></h1>
               <!-- Uncomment below if you prefer to use an image logo -->
               <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
           </div>

           <nav id="navbar" class="navbar">
               <ul>
                   <li><a class="nav-link scrollto active" href="{{ route('index') }}#hero">Inicio</a></li>
                   <li><a class="nav-link scrollto" href="{{ route('index') }}#about">Nosotros</a></li>
                   <li><a class="nav-link scrollto" href="{{ route('index') }}#services">Nuestra Casa</a></li>
                   <!--          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
                   <li><a class="nav-link scrollto" href="{{ route('index') }}#testimonials">Testimonios</a></li>
                   <li><a class="nav-link scrollto" href="{{ route('index') }}#team">Team</a></li>
                   <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contactanos</a></li>
                   <li><a class="nav-link scrollto" href="{{ url('donaciones#donaciones') }}">Donaciones</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
           </nav>
           <!-- .navbar -->

       </div>
   </header>


   <!-- ======= Hero Section ======= -->
   <section id="hero">
       <div class="hero-container" data-aos="fade-up">
           <h1>centro misionero bethesda</h1>
           <h2>Para el que cree todo le es posible</h2>
           <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
       </div>
   </section>
   <!-- End Hero -->
