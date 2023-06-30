  {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
          rel="stylesheet">

      <title>{{ config('app.name', 'Restobar Arrebol') }}</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

      <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

      <link rel="stylesheet" href="assets/css/owl-carousel.css">

      <link rel="stylesheet" href="assets/css/lightbox.css">

      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])

      <!-- Styles -->
      @livewireStyles
      {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot> --}}
  </head>

  <body>
      <header class="header-area header-sticky">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <nav class="main-nav">
                          <!-- ***** Logo Start ***** -->
                          <a href="index.html" class="logo">
                              <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                          </a>
                          <!-- ***** Logo End ***** -->
                          <!-- ***** Menu Start ***** -->
                          <ul class="nav">
                              <li class="scroll-to-section"><a href="{{ route('home.inicio') }}#top"
                                      class="active">Inicio</a></li>
                              <li class="scroll-to-section"><a href="{{ route('home.inicio') }}#about">Sobre
                                      Nosotros</a></li>
                              <li class="scroll-to-section"><a href="{{ route('home.inicio') }}#menu">Promociones</a>
                              </li>
                              <li class="scroll-to-section"><a href="{{ route('home.inicio') }}#offers">Menu</a></li>
                              <li class="scroll-to-section"><a
                                      href="{{ route('home.inicio') }}#reservation">Reservar</a></li>
                              <li class="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false"
                                  data-toggle="dropdown"><a href="">{{ Auth::user()->name }}</a></li>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href={{ route('profile.show') }}>Perfil</a>
                                  <a class="dropdown-item" href="{{ route('reservas.inicio') }}">Mis reservas</a>
                                  <a class="dropdown-item" href="{{ route('cerrarSesion') }}">Cerrar sesión</a>

                              </div>
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
      <div class="mt-28">
          {{-- Close your eyes. Count to one. That is how long forever feels. --}}
          <div class="w-11/12 mx-auto place-items-center max-h-full px-6">
              @if (session('success'))
                  <div class="mb-3 inline-flex w-full items-center rounded-lg bg-success-100 px-6 py-5 text-base text-success-700 bg-green-400"
                      role="alert">
                      <span class="mr-2">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="h-5 w-5">
                              <path fill-rule="evenodd"
                                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                  clip-rule="evenodd" />
                          </svg>
                      </span>
                      {{ session('success') }}
                  </div>
              @endif
              <div class="scroll-containerChico mx-auto">
                  @if ($reservas->count())
                      <form action="{{ route('reservas.eliminar') }}" method="POST" id="idEliminar">
                          @csrf
                          <table class="min-w-max w-full table-auto bg-gray-200 border-r-4">
                              <thead>
                                  <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                      <th class="cursor-pointer py-3 px-6 text-center" wire:click="order('id')">Nro. de
                                          reserva
                                      </th>
                                      <th class="cursor-pointer py-3 px-6 text-center" wire:click="order('id_zona')">
                                          Zona
                                      </th>
                                      <th class="cursor-pointer py-3 px-6 text-center" wire:click="order('id_zona')">
                                          Cantidad
                                          de personas
                                      </th>
                                      <th class="cursor-pointer py-3 px-6 text-center" wire:click="order('fecha')">Fecha
                                      </th>
                                      <th class="cursor-pointer py-3 px-6 text-center" wire:click="order('fecha')">Hora
                                      </th>
                                      <th class="py-3 px-6 text-center">Acciones</th>
                                  </tr>
                              </thead>
                              <tbody class="text-gray-600 text-sm font-light">
                                  @foreach ($reservas as $res)
                                      <tr class="border-b border-gray-200 hover:bg-gray-100">
                                          <td class="py-3 px-6 text-center w-4">
                                              <div class="items-center">
                                                  <div class="mr-2">
                                                      <input type="text" name="id" value="{{ $res->id }}"
                                                          hidden>
                                                      <span class="font-medium">{{ $res->id }}</span>
                                                  </div>
                                          </td>
                                          <td class="py-3 px-6 text-center">
                                              <div class=" items-center">
                                                  <span>{{ $res->zona->nombre }}</span>
                                              </div>
                                          </td>
                                          <td class="py-3 px-6 text-center">
                                              <div class="items-center">
                                                  <span>{{ $res->cantidad_personas }}</span>
                                              </div>
                                          </td>
                                          <td class="py-3 px-6 text-center">
                                              <div class=" items-center">
                                                  <span>{{ $res->fecha }}</span>
                                              </div>
                                          </td>
                                          <td class="py-3 px-6 text-center">
                                              <div class=" items-center">
                                                  <span>{{ \App\Models\Horarios::find($res->id_hora)->hora }}</span>
                                                  {{-- quitar segundos --}}
                                              </div>
                                          </td>
                                          <td class="py-3 px-6 text-center">
                                              <div class="flex item-center justify-center">
                                                  @if ($res->fecha > $hoy)
                                                      <button type="button" onclick="borrar()">Dar
                                                          de
                                                          baja</button>
                                                  @else
                                                      <p>Reserva ya efectuada</p>
                                                  @endif
                                              </div>
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </form>
                  @else
                      <div class="px-6 py-4">
                          No existen reservas en este momento.
                      </div>
                  @endif
              </div>
          </div>
      </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
      function borrar() {
          Swal.fire({
              title: '¿Seguro que lo desea eliminar?',
              text: "No podrá utilizar dicha reserva!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Dar de baja',
              cancelButtonText: 'Cancelar'
          }).then((result) => {
              if (result.isConfirmed) {
                  //   console.log(reserva);
                  //   window.location.href = "{{ route('reservas.eliminar', '+reserva+') }}";
                  $('#idEliminar').submit();
              }
          })
      };
  </script>
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
