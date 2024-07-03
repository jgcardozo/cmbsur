    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Horarios</h3>
                            <div class="horarios">
                                <p>Ayunos: Lunes a Sábado 9am-12m</p>
                                <p>Estudio Bíblico: Martes a Jueves 6pm - 8pm</p>
                                <p>Vigilia: Viernes 9pm - 5am</p>
                                <p>Reunión Juvenil: Sábado 6pm</p>
                                <p>Reunión Familiar: Domingos 6am, 9am y 6pm</p>
                            </div>
                            <div class="social-links mt-3">
                                <a target="_blank" href="https://www.youtube.com/@cmbcali" class="youtube"><i
                                        class="bi bi-youtube"></i></a>
                                <a target="_blank" href="https://www.facebook.com/cmbcali" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a target="_blank" href="https://www.instagram.com/cmbcali" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#hero">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#about">Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#services">Nuestra Casa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#testimonials">Testimonios</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>&nbsp;</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#team">Team</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}#contact">Contactanos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/donaciones#donaciones') }}">Donaciones</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Politica de Privacidad</a></li>
                            {{--  <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y Condiciones</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Suscribete a Email Informativo</h4>
                        <p>Dejanos tu correo para notificarte cuando vayan eventos, reuniones y demas</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder=""><input type="submit"
                                value="Suscribirme">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Centro Misionero Bethesda - Sur Cali</span></strong>. <br>Todos los
                Derechos
                Reservados
            </div>
            {{--
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
             --}}
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src="{{ asset('vendor/aos/aos.js') }} "></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }} "></script>
    {{-- <script src="{{ asset('php-email-form/validate.js')}} "></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
