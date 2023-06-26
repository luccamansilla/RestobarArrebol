<x-app-layout>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <form action="{{ route('reservas.store') }}" method="POST" id="idFormulario">
        @csrf
        <div class="-mx-4 flex flex-col bg-gray-50 px-3 py-3 items-center">
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-2">
                    <label for="" class="mb-3 block text-base font-medium text-black">
                        Fecha:
                    </label>
                    <input type="date" name="fecha" placeholder="Ingrese la fecha de la reserva..."
                        min="{{ $mañana }}"
                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]" />
                </div>

            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-2">
                    <label class="mb-3 block text-base font-medium text-black">
                        Zona:
                    </label>
                    <div class="relative">
                        <select id="id_zonas" name="zona"
                            class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                            @foreach ($zonas as $zona)
                                <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-2">
                    <label class="mb-3 block text-base font-medium text-black">
                        Horarios:
                    </label>
                    <div class="relative">
                        <select id="id_zonas" name="hora"
                            class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                            @foreach ($horarios as $hora)
                                <option value="{{ $hora->id }}">{{ $hora->hora }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="mb-2">
                    <label class="mb-3 block text-base font-medium text-black">
                        Cantidad de personas:
                    </label>
                    <div class="relative">
                        <select name="cantidad"
                            class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                            {{-- hacer foreach de cant --}}
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3 items-center place-content-center">
                {{-- <div class="w-full px-4 md:w-1/2 lg:w-1/3 "> --}}
                <div class="mb-2 ">
                    <label class="mb-3 block text-base font-medium text-black">
                        La reserva se guardara a nombre de su usuario ({{ $nombre }})
                    </label>
                </div>
                {{-- </div> --}}
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3 items-center place-content-center">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
                    <div class="mb-2 ">
                        <div class="relative ">
                            <button type="submit" name="botonReservar" id="btnReservar"
                                class="w-full rounded-md bg-green-400 border border-form-stroke p-3 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD] items-center">
                                Reservar</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
</x-app-layout>

{{-- 

{{-- 
<script type="text/javascript">
    $(document).ready(function() {
        $value = $('#id_zonas').val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('mesasZona') }}',
            data: {
                'zona': $value
            },

            success: function(data) {
                console.log(data);
                $('#contenidoMesas').html(data);
            }
        });
    })
</script> --}}
