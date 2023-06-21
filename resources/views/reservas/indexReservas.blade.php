<x-app-layout>
    <div class="-mx-4 flex flex-col bg-white px-3 py-3 items-center">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-2">
                <label for="" class="mb-3 block text-base font-medium text-black">
                    Hora de la reserva:
                </label>
                <input type="time" placeholder="Ingrese el horario de la reserva..."
                    class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]" />
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-2">
                <label class="mb-3 block text-base font-medium text-black">
                    Nombre de quien reserva:
                </label>
                <div class="relative">
                    <input type="text" placeholder="Ingrese su nombre aquí..."
                        class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                    <span class="absolute top-1/2 left-4 -translate-y-1/2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.72039 12.8864C4.50179 12.105 5.5616 11.666 6.66667 11.666H13.3333C14.4384 11.666 15.4982 12.105 16.2796 12.8864C17.061 13.6678 17.5 14.7276 17.5 15.8327V17.4993C17.5 17.9596 17.1269 18.3327 16.6667 18.3327C16.2064 18.3327 15.8333 17.9596 15.8333 17.4993V15.8327C15.8333 15.1696 15.5699 14.5338 15.1011 14.0649C14.6323 13.5961 13.9964 13.3327 13.3333 13.3327H6.66667C6.00363 13.3327 5.36774 13.5961 4.8989 14.0649C4.43006 14.5338 4.16667 15.1696 4.16667 15.8327V17.4993C4.16667 17.9596 3.79357 18.3327 3.33333 18.3327C2.8731 18.3327 2.5 17.9596 2.5 17.4993V15.8327C2.5 14.7276 2.93899 13.6678 3.72039 12.8864Z"
                                    fill="#637381"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.0007 3.33268C8.61994 3.33268 7.50065 4.45197 7.50065 5.83268C7.50065 7.21339 8.61994 8.33268 10.0007 8.33268C11.3814 8.33268 12.5006 7.21339 12.5006 5.83268C12.5006 4.45197 11.3814 3.33268 10.0007 3.33268ZM5.83398 5.83268C5.83398 3.5315 7.69946 1.66602 10.0007 1.66602C12.3018 1.66602 14.1673 3.5315 14.1673 5.83268C14.1673 8.13387 12.3018 9.99935 10.0007 9.99935C7.69946 9.99935 5.83398 8.13387 5.83398 5.83268Z"
                                    fill="#637381"></path>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-2">
                <label class="mb-3 block text-base font-medium text-black">
                    Zona:
                </label>
                <div class="relative">
                    <select name="" id=""
                        class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                        @foreach ($zonas as $zona)
                            <option value="{{ $zona->id_zona }}">{{ $zona->nombre_zona }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-2">
                <label class="mb-3 block text-base font-medium text-black">
                    Mesa:
                </label>
                <div class="relative">
                    <select name="" id=""
                        class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                        {{-- hacer foreach --}}
                        <option value="">Mesa1</option>
                        <option value="">Mesa2</option>
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
                    <select name="" id=""
                        class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                        {{-- hacer foreach de cant --}}
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3 items-center place-content-center">
            <div class="w-full px-4 md:w-1/2 lg:w-1/3 ">
                <div class="mb-2 ">
                    <div class="relative ">
                        <button name="" id=""
                            class="w-full rounded-md bg-green-400 border border-form-stroke p-3 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD] items-center">
                            Reservar</button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
