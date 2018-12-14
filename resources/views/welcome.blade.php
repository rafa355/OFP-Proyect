@extends('template.main')

@section('content')
<div class="page-wrapper" id="page-top">
    <header id="page-header">
        <nav class="navigation background-is-dark">
            <div class="container">
                <div class="wrapper">
                    <!--Aqui debe ir un logo con transparencia
                    <div class="left">
                        <a href="index-v1.html" class="brand"><img src="{{ asset('img/logoOFP.jpg')}}" style="border-radius:25px;width:275px" alt=""></a>
                    </div>
                    -->
                    <!--end left-->
                    <div class="right">
                        <ul class="nav navigation-links animate">
                            <li><a href="#page-top" class="scroll">Inicio</a></li>
                            <li><a href="#about" class="scroll">Nuestro Negocio</a></li>
                            <li><a href="#pricing" class="scroll">Sobre Nosotros</a></li>
                            <li><a href="#productos" class="scroll">Nuestros Productos</a></li>
                        </ul>
                        <div class="nav-btn">
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                        </div>
                    </div>
                    <!--end right-->
                </div>
            </div>
            <!--end container-->
        </nav>
        <!--end navigation-->
        <div class="hero-section background-is-dark" >
            <div class="wrapper">
                <div class="hero-title">
                    <div class="container">
                        <h1 class="animate">Orinoco Forestry Group</h1>
                        <form class="animate" id="form-hero">
                            <label for="form-hero-email">Recibe actualizaciones sobre la empresa directo a tu correo</label>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="form-hero-email" name="email" placeholder="Tu Correo" required="">
                                        <span class="input-group-btn">
                                            <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </form>
                        <!--end form-hero-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero-title-->
            </div>
            <!--end wrapper-->
            <div class="owl-carousel owl-theme" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{ asset('img/gallery-big-04.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{ asset('img/gallery-big-04.jpg')}}" alt=""></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="{{ asset('img/gallery-big-04.jpg')}}" alt=""></div>
                </div>
            </div>
            <!--end owl-carousel-->
        </div>
        <!--end hero-section-->
    </header>
    <!--end page-header-->

    <div id="page-content">

        <div class="block background-is-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter left and move 20px">
                            <i class="icon"><img src="{{ asset('img/icon-white-shield.png')}}" alt=""></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Empresa Comprometida</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac ornare felis.
                                    Nam velit neque, blandit id placerat
                                </p>
                                <a href="#principios" class="btn btn-default btn-rounded arrow scroll">Nuestros Principios</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter bottom and move 20px">
                            <i class="icon"><img src="{{ asset('img/icon-white-pin.png')}}" alt=""></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Multiples Ubicaciones</h3>
                                <p>Mauris ac ornare felis. Nam velit neque, blandit id placerat eu, venenatis at purus.
                                    Nunc maximus ultrices lacus
                                </p>
                                <a href="" class="btn btn-default btn-rounded arrow">Donde Estamos</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter right and move 20px">
                            <i class="icon"><img src="{{ asset('img/icon-white-wallet.png')}}" alt=""></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Tu Mejor Opción</h3>
                                <p>Nam velit neque, blandit id placerat eu, venenatis at purus. Nunc maximus ultrices
                                    lacus eu fringilla.
                                </p>
                                <a href="" class="btn btn-default btn-rounded arrow">Propuesta de Valor</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="bg-transfer opacity-15">
                    <img src="{{ asset('img/bg-01.jpg')}}" alt="">
                </div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->

        <div class="block" id="about">
            <div class="container">
                <h2>Nuestro Negocio</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Todo en Productos Forestales</h3>
                        <p  style="font-size: 17px;text-align: justify;">
                        Nuestro negocio se basa en la generación y
                            comercialización de productos forestales
                            provenientes de bosques plantados de Pinus
                            caribaea Morelet var. hondurensis, destacando
                            entre todos ellos la fabricación de bases para
                            molduras empleando finger joint, madera S4S y
                            toda aquella remanufactura de interés para
                            nuestros clientes.
                        </p>
                        <ul class="check-marks" style="font-size: 15px">
                            <li>Bases para molduras empleando finger joint</li>
                            <li>Madera S4S</li>
                            <li>Todo en remanufactura de interés</li>
                        </ul>
                        <!--end ul-->
                    </div>
                    <!--end col-md-6-->
                    <!--end col-md-6-->
                    <div class="col-md-6 col-sm-6">
                        <br><br><br>
                        <a href="http://www.orinocoforestryproducts.com" class="video-player video-popup" data-scroll-reveal="enter bottom and move 50px">
                                <img src="{{ asset('img/logoOFP.jpg')}}" style="border-radius:25px" alt="">
                        </a>
                        <!--end video-player-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="stage completed" data-scroll-reveal="enter left and move 20px">
                            <div class="icon">
                                <i class="icon_check"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>1. Stage</h3>
                                <h2>Planning</h2>
                                <figure>Completed</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage completed" data-scroll-reveal="enter left and move 20px after 0.2s">
                            <div class="icon">
                                <i class="icon_check"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>2. Stage</h3>
                                <h2>Building</h2>
                                <figure>Completed</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage in-progress" data-scroll-reveal="enter left and move 20px after 0.4s">
                            <div class="icon">
                                <i class="icon_hourglass"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>3. Stage</h3>
                                <h2>Finishing works</h2>
                                <figure>In progress</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage not-completed" data-scroll-reveal="enter left and move 20px after 0.6s">
                            <div class="icon">
                                <i class="icon_close"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>4. Stage</h3>
                                <h2>Project done</h2>
                                <figure>Not completed</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->


            <div class="block" id="pricing">
                <div class="container">
                    <div class="detail left-align">
                        <div class="title">
                            <h3 class="framed" style="font-size: 27px;">Misión</h3>
                        </div>
                        <!--end title-->
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="gallery">
                                    <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                        <img src="{{ asset('img/gallery-01.jpg')}}" alt="">
                                    </div>
                                </div>
                                <!--end gallery-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5 col-sm-5">
                                <div class="description">
                                    <h3>Su Confianza y Fidelidad.</h3>
                                    <p style="font-size: 17px;text-align: justify;">Obtener la confianza y fidelidad de nuestros
                                        clientes,
                                        agregando valor a nuestros productos y servicios,
                                        a través de la innovación en la producción y
                                        comercialización de productos forestales,
                                        empleando estándares de excelencia y
                                        desarrollando un ambiente de trabajo seguro,
                                        confortable y ambientalmente responsable, para
                                        impactar positivamente en la vida de nuestros
                                        clientes y colaboradores.
                                    </p>
                                </div>
                                <!--end description-->
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end detail-->
                    <div class="detail right-align">
                        <div class="title">
                            <h3 class="framed" style="font-size: 27px;">Visión</h3>
                        </div>
                        <!--end title-->
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="description">
                                    <h3>Que nos reconozcan.</h3>
                                    <p style="font-size: 17px;text-align: justify;">Ser reconocidos internacionalmente como una
                                        empresa de alta confianza, capacidad de
                                        innovación y gestión, para el establecimiento de
                                        relaciones comerciales en el ámbito de los
                                        productos forestales, fidelizando así a nuestros
                                        clientes y colaboradores, al tiempo que creamos
                                        valor para los accionistas y la sociedad.
                                    </p>
                                </div>
                                <!--end description-->
                            </div>
                            <!--end col-md-5-->
                            <div class="col-md-7 col-sm-7">
                                <div class="gallery">
                                    <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                        <img src="{{ asset('img/gallery-02.jpg')}}" alt="">
                                    </div>
                                </div>
                                <!--end gallery-->
                            </div>
                            <!--end col-md-7-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end detail-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->

        <div class="block" id="principios">
            <div class="container">
                <h2>Principios Corporativos</h2>
                <div class="row">
                    <div class="col-md-8 col-sm-8 equal-height">
                        <div class="panel-group background-solid" id="faq" role="tablist" aria-multiselectable="true" data-scroll-reveal="enter left and move 20px after">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer1" aria-expanded="true" aria-controls="answer1" style="font-size: 20px">Apegarse a las reglas del buen vivir.</a>
                                    </h4>
                                </div>
                                <div id="answer1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq1">
                                    <div class="panel-body">
                                        <p style="font-size: 15px">
                                        Apegarse a las reglas del buen vivir y a la
                                        constante practica del bien profesional,
                                        entendiendo que solo de esta manera se crea el
                                        ejemplo que genera diferencias y perdura en el
                                        tiempo, siendo así capaz de acrecentar la calidad
                                        de vida de nuestro entorno.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer2" aria-expanded="true" aria-controls="answer2" style="font-size: 20px">Ética y honradez como pilares.</a>
                                    </h4>
                                </div>
                                <div id="answer2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                    <div class="panel-body">
                                        <p style="font-size: 15px">
                                        Ética y honradez como pilares de nuestra
                                        actividad industrial y comercial, ya que el éxito de
                                        nuestras operaciones solo perdurará en el tiempo
                                        a través de la practica de estas virtudes.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq3">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer3" aria-expanded="true" aria-controls="answer3" style="font-size: 20px">Honor y Justicia como respaldo.</a>
                                    </h4>
                                </div>
                                <div id="answer3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                    <div class="panel-body">
                                        <p style="font-size: 15px">
                                        Honor y justicia como respaldo a nuestras
                                        acciones, ya que nuestro compromiso con la
                                        sociedad debe procurar la conservación de los
                                        recursos para las generaciones futuras.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq4">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer4" aria-expanded="true" aria-controls="answer4" style="font-size: 20px"> Libertad, Igualdad y Fraternidad.</a>
                                    </h4>
                                </div>
                                <div id="answer4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq4">
                                    <div class="panel-body">
                                        <p style="font-size: 15px">
                                        Libertad, igualdad y fraternidad, como principios
                                        fundamentales que rigen nuestra operación,
                                        basados en el hecho de que cada colaborador
                                        tiene las mismas condiciones, deberes y derechos
                                        en nuestra organización.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq5">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer5" aria-expanded="true" aria-controls="answer5" style="font-size: 20px">Respeto por el país donde desarrollemos.</a>
                                    </h4>
                                </div>
                                <div id="answer5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq5">
                                    <div class="panel-body">
                                        <p style="font-size: 15px">
                                        Respeto por el país donde desarrollemos
                                        operaciones, sus leyes y cultura, así como por las
                                        comunidades con quienes interactuemos.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                        </div>
                        <!--/ .panel-group-->
                    </div>
                    <div class="col-md-4 col-sm-4 equal-height">
                        <div class="framed vertical-aligned-wrapper" data-scroll-reveal="enter right and move 20px">
                        <img src="{{ asset('img/principios.jpg')}}" alt="">
                            <!--end form-->
                        </div>
                        <!--end framed-->
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="container">
            <div class="block background-is-dark">
                <div class="testimonials">
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
                                <blockquote>
                                    <p>"It’s not about making a business, it’s about making the best."</p>
                                    <footer>Orinoco Foretry Products</footer>
                                </blockquote>
                                <!--end blockquote-->
                            </div>
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </div>
                <!--end testimonials-->
                <div class="background-wrapper">
                    <div class="bg-transfer opacity-15">
                        <img src="{{ asset('img/gallery-big-01.jpg')}}" alt="">
                    </div>
                    <div class="background-color background-color-black"></div>
                </div>
                <!--end background-wrapper-->
            </div>
            <!--end block-->
        </div>
        <!--end container-->

            <div class="block" id="productos">
                <div class="container">
                <h2>Nuestros Productos</h2>

                    <div class="contact framed">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="person">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                                <img src="{{ asset('img/logoOFP.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-12 col-sm-12 text-center">
                                            <div class="contact-data">
                                                <a href="#" class="underline" style="font-size:17px">info@orinocoforestryproducts.com</a>
                                            </div>
                                            <!--end contact-data-->
                                            <hr>
                                            <div class="social">
                                                <a href="#"><i class="social_facebook_circle"></i>Facebook</a>
                                                <a href="#"><i class="social_twitter_circle"></i>Twitter</a>
                                                <a href="#"><i class="social_instagram_circle"></i>@orinocoforestry</a>
                                                <a href="#"><i class="social_skype_circle"></i>Skype</a>
                                            </div>
                                            <!--end social-->
                                        </div>
                                        <!--end col-md-7-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end person-->
                            </div>
                            <!--end col-md-5-->
                            <div class="col-md-7 col-sm-7">
                                <img src="{{ asset('img/productos.png')}}" alt="">
                            </div>
                            <!--end col-md-7-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end contact-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->

        <div class="container">
            <hr>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

@include('template.footer')

</div>
<!--end page-wrapper-->

<div class="modal fade apartment-selector" id="floor-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h4>Building A</h4>
                    <h3>Floor 3</h3>
                    <h1 class="modal-title">Apartment 01</h1>
                    <h2>$69,000</h2>
                </div>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modal-floor-plan-1" aria-controls="modal-floor-plan-1" role="tab" data-toggle="tab">Floor plan</a></li>
                        <li role="presentation"><a href="#modal-gallery-1" aria-controls="modal-gallery-1" role="tab" data-toggle="tab">Gallery</a></li>
                    </ul>
                    <!--end nav-tabs-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                            <a href="{{ asset('img/floor-plan.jpg')}}" class="image-popup"><img src="{{ asset('img/floor-plan.jpg')}}" alt=""></a>
                            <div class="note">Click to zoom</div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="modal-gallery-1">
                            <div class="gallery">
                                <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img src="{{ asset('img/gallery-01.jpg')}}" alt="">
                                    <img src="{{ asset('img/image-video.jpg')}}" alt="">
                                    <img src="{{ asset('img/gallery-02.jpg')}}" alt="">
                                </div>
                            </div>
                            <!--end gallery-->
                            <a href="http://vimeo.com/24506451" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i>Click to take a video tour</a>
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
                <!--end left-->
                <div class="right">
                    <h3>Parameters</h3>
                    <dl>
                        <dt>Kitchen</dt>
                        <dd>24m<sup>2</sup></dd>
                        <dt>Master bedroom</dt>
                        <dd>58m<sup>2</sup></dd>
                        <dt>Balcony</dt>
                        <dd>67m<sup>2</sup></dd>
                        <dt>Toilet</dt>
                        <dd>20m<sup>2</sup></dd>
                        <dt>Living room</dt>
                        <dd>77m<sup>2</sup></dd>
                        <dt>Passage</dt>
                        <dd>48m<sup>2</sup></dd>
                    </dl>
                    <h3>Description</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula mauris at finibus efficitur.
                        Nulla facilisi. Proin sodales nibh id consequat mattis. Phasellus eu consequat nunc.
                    </p>
                    <hr>
                    <figure><a href="#" class="icon"><i class="fa fa-file-pdf-o"></i>Download PDF</a></figure>
                    <figure><a href="#" class="icon"><i class="fa fa-file-image-o"></i>Download Brochure</a></figure>
                </div>
                <!--end right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!--end outer-wrapper-->
@endsection