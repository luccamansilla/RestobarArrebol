<x-app-layout>
    hola
    
        @foreach ($productos as $producto)
            {{ $producto->nombre }}<br>
            {{ $producto->id_rubro }}<br>
            {{ number_format($producto->precio, 2, ',', '.') }}<br>
        @endforeach
    
</x-app-layout>
