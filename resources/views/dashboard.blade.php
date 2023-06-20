<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="h-screen w-full">
                    {{-- <div class="flex justify-end ">
                        <a class="text-lg font-sans hover:underline underline-offset-1 px-4"
                            href="{{ route('users.index') }}">Iniciar
                            Sesión</a>
                        <a class="text-lg font-sans hover:underline underline-offset-1"
                            href="{{ route('users.registro') }}">Registrarse</a>
                    </div> --}}
                    <div class="flex justify-center items-center py-0">
                        {!! file_get_contents('img/Restobar.svg') !!}
                    </div>
                    <div class="flex justify-center items-center">
                        <button class="bg-white text-black font-bold py-2 px-4 rounded-full">
                            Sobre nosotros
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
