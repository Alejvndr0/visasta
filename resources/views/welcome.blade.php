@extends('layouts.inicio')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">VISAS TRAMITES Y ASESORIA BOLIVIA</h4>
                            <h1 class="display-3 text-white mb-md-4">Descubramos el Mundo Juntos</h1>
                            <a href="{{ url('/service') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Nuestros Servicios</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">VISAS TRAMITES Y ASESORIA BOLIVIA</h4>
                            <h1 class="display-3 text-white mb-md-4">Descubre Lugares Increíbles con Nosotros</h1>
                            <a href="{{ url('/service') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Nuestros Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de Nosotros</h6>
                        <h1 class="mb-3">Somos una agencia especializada en trámites de visa y asesoría legal. Con años de experiencia, ayudamos a nuestros clientes a cumplir sus sueños de viajar al extranjero de manera segura y eficiente.</h1>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <a href="{{ url('/service') }}" class="btn btn-primary mt-1">Nuestros Servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mb-2">Precios Competitivos</h5>
                            <p class="m-0">Ofrecemos las mejores tarifas del mercado sin comprometer la calidad de nuestros productos y servicios. Brindamos soluciones accesibles para todo tipo de clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mb-2">Mejores Servicios</h5>
                            <p class="m-0">Nos destacamos por brindar un servicio excepcional, con atención personalizada y soluciones adaptadas a tus necesidades. La satisfacción de nuestros clientes es nuestra prioridad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-user-shield text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mb-2">Seguridad Garantizada</h5>
                            <p class="m-0">Protegemos tus datos y transacciones con los más altos estándares de seguridad, garantizando confianza y tranquilidad en cada operación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destinos</h6>
                <h1>Explora los Mejores Destinos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-1.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United States</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-2.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United Kingdom</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-3.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Australia</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-4.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">India</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-5.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">South Africa</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-6.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Indonesia</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
                <h1>NUESTROS SERVICIOS</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ship mx-auto mb-4"></i>
                        <h5 class="mb-2">CRUCEROS</h5>
                        <p class="m-0">Disfruta de experiencias inolvidables en altamar con paquetes exclusivos a los mejores destinos. Viaja con todo incluido y vive el lujo de los cruceros más prestigiosos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-plane mx-auto mb-4"></i>
                        <h5 class="mb-2">VIAJES NACIONALES</h5>
                        <p class="m-0">Explora los rincones más hermosos de Bolivia con opciones de vuelos, adaptadas a tus necesidades. Ofrecemos planes para viajes cortos o largos.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-globe mx-auto mb-4"></i>
                        <h5 class="mb-2">VIAJES INTERNACIONALES</h5>
                        <p class="m-0">Descubre el mundo con paquetes personalizados a los destinos más emblemáticos. Te asesoramos con vuelos, hospedaje, transporte y actividades turísticas.</p>
                    </div>
                </div>
                <!-- Add more services as needed -->
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Paquetes</h6>
                <h1>Paquetes Turísticos Perfectos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/package-1.jpg') }}" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i></small>
                            </div>
                            <a class="h5 text-decoration-none" href="">nombre del paquete</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more packages as needed -->
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection