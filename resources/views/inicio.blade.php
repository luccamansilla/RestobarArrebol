@vite('resources/css/app.css')
<style>
    body {
        --bg-image: url('img/restaurant2.jpg');
        --bg-image-opacity: .75;

    }

    body::after {
        content: '';
        position: absolute;
        z-index: -1;
        inset: 0;
        opacity: var(--bg-image-opacity);

        background-image: var(--bg-image);
        background-size: 100% 100%;
        background-position: center;
    }
</style>
<div class="h-screen w-full">
    <div class="flex justify-end ">
        <a class="text-lg font-sans hover:underline underline-offset-1 px-4" href="{{ route('users.index') }}">Iniciar
            Sesión</a>
        <a class="text-lg font-sans hover:underline underline-offset-1"
            href="{{ route('users.registro') }}">Registrarse</a>
    </div>
    <div class="flex justify-center items-center py-0">
        {!! file_get_contents('img/Restobar.svg') !!}
    </div>
    <div class="flex justify-center items-center">
        <button class="bg-white text-black font-bold py-2 px-4 rounded-full">
            Ver mas
        </button>
    </div>
</div>
