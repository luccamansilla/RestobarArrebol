  {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Restobar Arrebol') }}</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
      <div>
          {{-- Close your eyes. Count to one. That is how long forever feels. --}}
          <div class="w-11/12 mx-auto place-items-center max-h-full px-6">
              {{-- max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 h-96 --}}
              {{-- <div class="px-6 py-4 flex item-center">
                    <a href="{{ route('reservas.realizar') }}">
                        <x-button> Realizar Reserva</x-button>
                    </a>
                </div> --}}
              {{-- Message --}}
              <div class="text-right">
                <x-button class="mb-3 mt-3"><a href="{{ route('home') }}">Volver</a></x-button>
            </div>
              @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible bg-green-400" role="alert">
                      <button type="button" class="close" data-dismiss="alert">
                          <i class="fa fa-times"></i>
                      </button>
                      <strong>Realizado!</strong> {{ session('success') }}
                  </div>
              @endif
              @if (Session::has('error'))
                  <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert">
                          <i class="fa fa-times"></i>
                      </button>
                      <strong>Error!</strong> {{ session('error') }}
                  </div>
              @endif
              <div class="scroll-containerChico mx-auto">
                  @if ($reservas->count())
                      <table class="min-w-max w-full table-auto">
                          <thead>
                              <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                  <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('id')">Número de reserva
                                  </th>
                                  <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('id_zona')">Zona
                                  </th>
                                  <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('id_zona')">A
                                      nombre de
                                  </th>
                                  <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('fecha')">Fecha
                                  </th>
                                  <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('fecha')">Hora
                                </th>
                                  <th class="py-3 px-6 text-center">Acciones</th>
                              </tr>
                          </thead>
                          <tbody class="text-gray-600 text-sm font-light">
                              @foreach ($reservas as $res)
                                  <tr class="border-b border-gray-200 hover:bg-gray-100">
                                      <td class="py-3 px-6 text-left">
                                          <div class="flex items-center">
                                              <div class="mr-2">
                                                  <span class="font-medium">{{ $res->id }}</span>
                                              </div>
                                      </td>
                                      <td class="py-3 px-6 text-left">
                                          <div class="flex items-center">
                                              <span>{{ $res->zona->nombre }}</span>
                                          </div>
                                      </td>
                                      <td class="py-3 px-6 text-left">
                                          <div class="flex items-center">
                                              <span>{{ $res->user->name }}</span>
                                          </div>
                                      </td>
                                      <td class="py-3 px-6 text-left">
                                          <div class="flex items-center">
                                              <span>{{ $res->fecha }}</span>
                                          </div>
                                      </td>
                                      <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{ \App\Models\Horarios::find($res->id_hora)->hora }}</span> 
                                            {{-- quitar segundos --}}
                                        </div>
                                    </td>
                                      <td class="py-3 px-6 text-center">
                                          <div class="flex item-center justify-center">
                                              @if ($res->fecha > $hoy)
                                                  <button type="submit"
                                                      wire:click="$emit('deleteReserva', {{ $res->id }})">Dar de
                                                      baja</button>
                                              @else
                                                  <p>No se puede dar de baja</p>
                                              @endif
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
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
      console.log('asd');
      Livewire.on('deleteReserva', idReserva => {
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
                  Swal.fire('Eliminada.', 'La reserva ha sido eliminada', 'success');
                  Livewire.emit('delete', idReserva);
              }
          })
      });
  </script>
