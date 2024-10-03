<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Daker SRL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url()?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url()?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url()?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url()?>css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="<?= base_url()?>" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fas fa-desktop"></i> DAKER<span class="fs-5">SRL</span></h1>
                    <!-- <img src="<?= base_url()?>img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= base_url()?>" data-header="index" class="nav-item-header nav-item nav-link active">Inicio</a>
                        <a href="<?= base_url()?>about" data-header="about" class="nav-item-header nav-item nav-link">Acerca de nosotros</a>
                        <a href="<?= base_url()?>service" data-header="service" class="nav-item-header nav-item nav-link">Servicios</a>
                        <a href="<?= base_url()?>portfolio" data-header="portfolio" class="nav-item-header nav-item nav-link">Proyectos</a>
                        <div class="nav-item dropdown">
                            <!-- <a href="<?= base_url()?>#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url()?>team.html" class="dropdown-item">Our Team</a>
                                <a href="<?= base_url()?>testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="<?= base_url()?>404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="<?= base_url()?>contact.html" class="nav-item nav-link">Contáctanos</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Soluciones Informáticas Integrales para Potenciar tu Negocio</h1>
                            <p class="text-white pb-3 animated zoomIn">Ofrecemos servicios especializados en administración de servidores, desarrollo de software, redes, cableado estructurado y soporte TI. Tu infraestructura tecnológica en manos expertas.</p>
                            <a href="<?= base_url()?>" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Solicita una Cotización</a>
                            <a href="<?= base_url()?>" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contáctanos</a>
                        </div>
                        <div class="col-lg-4 text-center text-lg-start">
                            <img class="img-fluid" src="<?= base_url()?>img/customize/servidores_animados.gif" alt="">
                            <!-- <img class="img-fluid" src="<?= base_url()?>img/hero.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->