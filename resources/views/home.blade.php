<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Restobar Arrebol</title>
    <!--
            
        TemplateMo 558 Klassy Cafe
        
        https://templatemo.com/tm-558-klassy-cafe
        
        -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('inicio') }}" class="logo">
                            <img src="assets/images/restobar-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#about">Sobre Nosotros</a></li>
                            {{-- <li class="scroll-to-section"><a href="#menu">Promociones</a></li> --}}
                            <li class="scroll-to-section"><a href="#offers">Menu / Promociones</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Reservar</a></li>
                            @auth
                                <li class="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false"
                                    data-toggle="dropdown"><a href="">{{ Auth::user()->name }}</a></li>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href={{ route('profile.show') }}>Perfil</a>
                                    <a class="dropdown-item" href="{{ route('reservas.inicio') }}">Mis reservas</a>
                                    <a class="dropdown-item" href="{{ route('cerrarSesion') }}">Cerrar sesión</a>

                                </div>
                            @else
                                <li class="scroll-to-section"><a href="{{ route('users.index') }}">Ingresar</a></li>
                                <li class="scroll-to-section"><a href="{{ route('users.registro') }}">Registrarse</a></li>
                            @endauth
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Restobar Arrebol</h4>
                            <h6>La mejor Experiencia</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/slide-01.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/slide-02.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="assets/images/slide-03.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Sobre nosotros</h6>
                            <h2>Sabores únicos, placer garantizado.</h2>
                        </div>
                        <p class="text-justify">Restobar arrebol ofrece una fusión entre la cocina de autor y
                            los platos tradicionales, creando un menú cautivador.
                            Además, ofrecemos una variedad de cervezas
                            artesanales de las marcas más reconocidas del país. Te damos la bienvenida a un
                            lugar donde la pasión por la buena comida se
                            encuentra con la cerveza artesanal de primera calidad, brindándote una experiencia
                            gastronómica y cervecera inigualable.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            {{-- {{-- <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a> --}}
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Offers Area Starts ***** -->
    {{-- Dice id=menu pero en realidad es ofertas si lo cambio se rompe --}}
    {{-- <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>Ofertas y Promociones</h6>
                        <h2>Nuestras promociones semanales</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price">
                                <h6>$14</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>Chocolate Cake</h1>
                                <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sedii
                                    do eiusmod teme.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price">
                                <h6>$22</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>Klassy Pancake</h1>
                                <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sedii
                                    do eiusmod teme.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price">
                                <h6>$18</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>Tall Klassy Bread</h1>
                                <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sedii
                                    do eiusmod teme.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price">
                                <h6>$10</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>Blueberry CheeseCake</h1>
                                <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sedii
                                    do eiusmod teme.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price">
                                <h6>$8.50</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>Klassy Cup Cake</h1>
                                <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sedii
                                    do eiusmod teme.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price">
                                <h6>$7.25</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>Klassic Cake</h1>
                                <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sedii
                                    do eiusmod teme.</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Offers Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    {{-- Dice id=offers pero en realidad es menu si lo cambio se rompe --}}
    <section class="section" id="offers">
        <div class="container">
            <div>
                <div class="text-center">
                    <div class="section-heading">
                        <h6>Menú y promociones</h6>
                        <h2>Nuestros platos y bebidas.</h2>
                        <h5 class="text-justify text-center">Ofrecemos descuentos para productos seleccionados y
                            categorias completas.</h5>
                    </div>
                </div>
            </div>
            {{-- @foreach ($promociones as $promocion)
                {{ $promocion }}
            @endforeach --}}

            <div class="row">
                <div class="col-lg-auto">
                    <div class="row" id="tabs">
                        <div class="col-lg-auto">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-auto">
                                        <ul>
                                            @foreach ($rubros as $index => $rubro)
                                                <li><a href='#tabs-{{ $index + 1 }}'>{{ $rubro->nombre_rubro }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                @for ($i = 1; $i < $rubros->count() + 1; $i++)
                                    <article id='tabs-{{ $i }}'>
                                        <!-- ***** Si el rubro tiene promoción imprimo mensaje y horario ***** -->
                                        @if (App\Models\Rubro::find($i)->promocion)
                                            <div class="text-center">
                                                <h5 class="text-justify text-center">Descuento del
                                                    %{{ App\Models\Rubro::find($i)->promocion->descuento }} en
                                                    {{ App\Models\Rubro::find($i)->nombre_rubro }}
                                                </h5>
                                                <br>
                                                Promocion válida de
                                                {{ date('H:i', strtotime(App\Models\Rubro::find($i)->promocion->hora_desde)) }}hs
                                                a
                                                {{ date('H:i', strtotime(App\Models\Rubro::find($i)->promocion->hora_hasta)) }}hs
                                                hasta el
                                                {{ date('d/m/Y', strtotime(App\Models\Rubro::find($i)->promocion->fecha_vencimiento)) }}.
                                                </h6>
                                                <br>
                                                <br>
                                            </div>
                                        @endif
                                        <!-- -->
                                        <div class="row">
                                            @foreach ($productos as $producto)
                                                @if ($producto->id_rubro == $i)
                                                    <div class="col-lg-6">
                                                        <div class="tab-item">
                                                            <div class="d-inline">
                                                                <h4>{{ $producto->nombre }}
                                                                    <!-- ***** Si el rubro no tiene promoción pero el producto si imprimo descuento producto ***** -->
                                                                    @if (!$producto->rubro->promocion && $producto->promocion)
                                                                        (Descuento del
                                                                        %{{ $producto->promocion->descuento }})
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                            @if (!$producto->rubro->promocion && $producto->promocion)
                                                                <p>Promoción válida de
                                                                    {{ date('H:i', strtotime($producto->promocion->hora_desde)) }}hs
                                                                    a
                                                                    {{ date('H:i', strtotime($producto->promocion->hora_hasta)) }}hs
                                                                    hasta
                                                                    {{ date('d/m/Y', strtotime($producto->promocion->fecha_vencimiento)) }}.
                                                                </p>
                                                            @endif
                                                            <p class="text-justify">{{$producto->descripcion}}</p>
                                                            @if ($producto->rubro->promocion)
                                                                <div class="price">
                                                                    <h6 class="mr-2">
                                                                        ${{ number_format($producto->precio * (1 - $producto->rubro->promocion->descuento / 100), 0, ',', '.') }}
                                                                        <s>${{ number_format($producto->precio, 0, ',', '.') }}</s>
                                                                    </h6>
                                                                </div>
                                                            @elseif ($producto->promocion)
                                                                <div class="price">
                                                                    <h6 class="mr-2">
                                                                        ${{ number_format($producto->precio * (1 - $producto->promocion->descuento / 100), 0, ',', '.') }}
                                                                        <s>${{ number_format($producto->precio, 0, ',', '.') }}</s>
                                                                    </h6>
                                                                </div>
                                                            @else
                                                                <div class="price">
                                                                    <h6 class="mr-2">
                                                                        ${{ number_format($producto->precio, 0, ',', '.') }}
                                                                    </h6>
                                                                </div>
                                                            @endif
                                                        </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </article>
                                @endfor
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6 align-self-right"> --}}
                <div class="right-text-content">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                {{ session('success') }}
                            </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            {{-- </div> --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Haz tu reserva</h6>
                            <h2>Aquí puedes realizar tu reserva o simplemente visitar nuestro restaurante</h2>
                        </div>
                        <p>Estamos abiertos todos los días de 18:00 a 00:00.<br><br>
                            La reserva debe realizarce con al menos 1 día de anticipación.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Contacto</h4>
                                    <span>+542974854742</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email</h4>
                                    <span><a href="#">restobarArrebol@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="{{ route('reservas.store') }}" method="POST" id="idFormulario">
                            @csrf
                            @auth
                                <input name="id_usuario" value="{{ Auth::user()->id }}" hidden>
                            @endauth
                            <div class="row">
                                <div class="col-md-12 col-sm-12 mt-5">
                                    {{-- <div id="filterDate2"> --}}
                                    <fieldset class="text-white">Fecha
                                        <div class="" data-date-format="dd/mm/yyyy">
                                            <input name="fecha" id="date" type="date" class="form-control"
                                                min="{{ $mañana }}" placeholder="dia/mes/año *" required>
                                            {{-- <div class="input-group-addon"> --}}
                                            <span class="glyphicon glyphicon-th"></span>
                                            {{-- </div> --}}
                                        </div>
                                        {{-- </div> --}}
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset class="text-white">Horario
                                        <select name="hora" id="time" disabled>
                                            <option value="0">Seleccionar un horario</option>
                                            @foreach ($horarios as $horario)
                                                <option value="{{ $horario->id }}">{{ $horario->hora }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset class="text-white">Zonas disponibles
                                        <select name="zona" id="zonaid" disabled>
                                            <option value="0">Seleccionar una zona</option>
                                            {{-- 
                                                    @foreach ($zonas as $zona)
                                                        <option value="{{ $zona->id }}">{{ $zona->nombre }}
                                                        </option>
                                                    @endforeach --}}
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset class="text-white">Cantidad de personas (según
                                        disponibilidad)
                                        <select value="0" name="cantidad_personas" id="cantidad" disabled>
                                            <option value="0" id="0" name="0">Seleccionar cantidad
                                            </option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="text-white">Todos los campos son requeridos.</fieldset>
                                </div>

                                <div class="col-lg-12 mt-5">
                                    <fieldset>
                                        @auth
                                            <button onclick="confirmacion()" type="button" id="form-submit"
                                                class="main-button-icon">Reservar</button>
                                        @else
                                            <button onclick="mensaje()" type="button" id="form-submit"
                                                class="main-button-icon">Reservar</button>
                                        @endauth
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="{{ route('inicio') }}"><img src="assets/images/resto-white.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Restobar Arrebol.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- @push('js') --}}
<script>
    function confirmacion() {
        let fecha = document.getElementById("date").value;
        let zona = document.getElementById("zonaid").value;
        let hora = document.getElementById("time").value;
        let cantidad = document.getElementById("cantidad").value;
        if (!fecha || zona == "0" || hora == "0" || cantidad == "0") {
            Swal.fire('¡Cuidado!', 'Asegurese de ingresar todos los datos de la reserva.');
        } else {
            Swal.fire({
                title: '¿Desea confirmar la reserva?',
                text: "No podra cambiar la información ingresada",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reservar.',
                cancelButtonText: 'Cancelar.'
            }).then((result) => {
                if (result.value) {
                    $('#idFormulario').submit();
                }
            });
        }
    }

    function mensaje() {

        Swal.fire('¡Atención!', 'Debe iniciar sesion o registrarse antes de realizar una reserva.');
    };
</script>
{{-- @endpush --}}
<script src="assets/js/jquery-2.1.0.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>
<script>
    $("#date").change(function() {
        $valor = $('#date').val();
        if (!$valor) {
            $("#cantidad").val("0");
            $("#zonaid").val("0");
            $("#time").val("0");
            $("#time").attr("disabled", true);
            $("#cantidad").attr("disabled", true);
            $("#zonaid").attr("disabled", true);
        } else {
            $("#time").val("0");
            $("#cantidad").val("0");
            $("#zonaid").val("0");
            $("#time").attr("disabled", false);
            $("#zonaid").attr("disabled", true);
            $("#cantidad").attr("disabled", true);
        }
    });
</script>
<script>
    $("#time").change(function() {
        $value = $('#time').val();
        $value2 = $('#date').val();
        if ($value == "0") {
            $("#cantidad").val("0");
            $("#zonaid").val("0")
            $("#cantidad").attr("disabled", true);
            $("#zonaid").attr("disabled", true);
        } else {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('zonasFecha') }}',
                data: {
                    'fecha': $value2,
                    'horario': $value
                },
                success: function(data) {
                    console.log(data);
                    $("#zonaid").removeAttr("disabled");
                    $('#zonaid').html(data);
                }
            });
        }
    });
</script>
<script>
    var cantidad = document.getElementById('zonaid');
    var invitados = document.getElementById('cantidad');
    cantidad.addEventListener('change', function() {
        invitados.innerHTML = '';
        // Limpiar opciones anteriores del segundo select
        var disponible = cantidad.options[cantidad.selectedIndex].getAttribute('name');
        invitados.removeAttribute('disabled');
        var option0 = document.createElement('option');
        option0.value = 0;
        option0.text = 'Seleccionar cantidad';
        invitados.appendChild(option0);
        // Crear nuevas opciones en el segundo select según el valor seleccionado en el primer select
        for (var i = 1; i <= disponible; i++) {
            var option = document.createElement('option');
            option.value = i;
            option.text = i;
            invitados.appendChild(option);
        }
    });
</script>
