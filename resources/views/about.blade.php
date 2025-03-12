@extends('layouts.inicio')

@section('content')
 <!-- Header Start -->
 <div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">SOBRE NOSOTROS</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html">inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">sobre nosotros</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->



<!-- Booking End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de Nosotros</h6>
                    <h1 class="mb-3">Somos una agencia especializada en trámites de visa y asesoría legal. Con años de experiencia, ayudamos a nuestros clientes a cumplir sus sueños de viajar al extranjero de manera segura y eficiente.</h1>
                   
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <a href="service.html" class="btn btn-primary mt-1">Nuestros Servicios</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection