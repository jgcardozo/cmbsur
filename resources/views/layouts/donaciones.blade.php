<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->

    <main id="main">

        <section id="donaciones" class="contact ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Donaciones</h2>
                    <p>Enviar comprobante<strong> +57 310 350 7699</strong></p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <img src="{{ asset('img/donaciones/bancolombia1.png') }}"
                                style=" width: 50%; height: 50%; object-fit: cover;" />
                            <p>Cuenta de Ahorros número 123-4567-89</p>
                            <p>A nombre de Andrés Gómez</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <img src="{{ asset('img/donaciones/daviplata.png') }}"
                                style=" width: 80%; height: 80%; object-fit: cover;" />
                                  <p>(310) 350 7699</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="https://clientes.nequi.com.co/recargas" target="_blank">
                            <div class="info-box  mb-4">
                                <img src="{{ asset('img/donaciones/nequi.svg') }}"
                                    style=" width: 40%; height: 40%; object-fit: cover;" />
                                <p>(310) 350 7699</p>
                            </div>
                        </a>
                    </div>

                </div> <!-- row -->


                <div class="row">

                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <h3>Donación Tarjeta / PSE</h3>
                            <img src="{{ asset('img/donaciones/wompi.png') }}"
                                style=" width: 20%; height: 20%; object-fit: cover;" />
                        </div>
                    </div>

{{--                     <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <img src="{{ asset('img/donaciones/efecty.png') }}" class="rounded-sm"
                                style=" width: 50%; height: 50%; object-fit: cover;" />
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Donaciones Section -->
    </main>

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

</body>

</html>
