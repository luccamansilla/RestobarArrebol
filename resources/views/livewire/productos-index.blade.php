<div>
    {{-- @if ($productos->count())
                <div class="card-body">
                    <div class="table-responsive rounded">
                        <table class="table align-middle table-striped table-bordered table-sm"
                            style="text-align: center; vertical-align: middle;">
                            <thead class="table-dark">
                                <tr>
                                    <th role="button" wire:click="order('id')">Nombre</th>
                                    <th role="button">Rubro</th>
                                    <th role="button" wire:click="order('amount_members')">
                                        Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->id_rubro }}</td>
                                        <td>{{ number_format($producto->precio, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="card-footer">
                    <div class="alert alert-secondary" role="alert">
                        No se encontraron resultados.
                    </div>
                </div>
            @endif --}}
    <!-- component -->
    <!-- Gogole Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
        rel="stylesheet" />
    <!-- AlpineJS -->
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <!-- Tailwind -->
    <script src="https://cdn-tailwindcss.vercel.app/"></script>

    <style>
        section {
            font-family: "Poppins", sans-serif;
        }
    </style>
    <section x-data="xData()" class="bg-gray-100 dark:bg-gray-900 py-10 px-12">
        <!-- Card Grid -->
        <div
            class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <template x-for="post in posts">
                <!-- Card Item -->
                <div
                    class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1">
                    <!-- Clickable Area -->
                    <div class="tarjeta">
                        <a class="cursor-pointer" :id="post.id_rubro" :href="post.href">
                            <figure>
                                <!-- Image -->
                                <img :idrubro="post.id_rubro" :src="post.image + '?auto=format&fit=crop&w=400&q=50'"
                                    class="rounded-t h-72 w-full object-cover" />
                                <figcaption class="p-4">
                                    <!-- Title -->
                                    <p class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300"
                                        x-text="post.title">
                                        <!-- Post Title -->
                                    </p>
                                    <!-- Description -->
                                    {{-- <small class="leading-5 text-gray-500 dark:text-gray-400" x-text="post.description">
                                        <!-- Post Description -->
                                    </small> --}}
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </template>
        </div>
    </section>
    {{-- <dialog id="mymodalcentered" class="bg-transparent z-0 relative w-screen h-screen">
        <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
            <div class="bg-white flex rounded-lg w-1/2 relative">
                <div class="flex flex-col items-start">
                    <div class="p-7 flex items-center w-full">
                        <div class="text-gray-900 font-bold text-lg">Modal Centered</div>
                        <svg onclick="modalClose()" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                        </svg>
                    </div>

                    <div class="px-7 overflow-x-hidden overflow-y-auto" style="max-height: 40vh;">
                        
                            @if ($productos)
                                @foreach ($productos as $producto)
                                        {{ $producto->nombre }}
                                        {{ $producto->id_rubro }}
                                        {{ number_format($producto->precio, 2, ',', '.') }}
                                    
                                @endforeach
                                @endif
                        
                    </div>
                    <div class="p-7 flex justify-end items-center w-full">
                        <button type="button" onclick="modalClose('mymodalcentered')"
                            class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </dialog> --}}
</div>
<script>
    function xData() {
        /**
         * Shuffle an array
         * @param {Array} array
         * @source https://stackoverflow.com/a/2450976/6940144
         */

        const posts = [{
                image: "https://images.unsplash.com/photo-1615332579037-3c44b3660b53?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                title: "CERVEZA ARTESANAL",
                description: "Tomate una birrita",
                id_rubro: "5",
                id: "1",
                href: "{{ route('menu.show', 5) }}"
            },
            {
                image: "https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80",
                title: "PARRILLA",
                description: "Comete un vacío",
                id_rubro: "1",
                id: "2",
                href: "{{ route('menu.show', 1) }}"
            },
            {
                image: "https://images.unsplash.com/photo-1600803907087-f56d462fd26b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=327&q=80",
                title: "PASTAS",
                description: "Comete unos tallarinsitos",
                id_rubro: "2",
                id: "3",
                href: "{{ route('menu.show', 2) }}"

            },
            {
                image: "https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                title: "PIZZAS",
                description: "Clavate una pizzita",
                id_rubro: "7",
                id: "4",
                href: "{{ route('menu.show', 7) }}"

            },
            {
                image: "https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80",
                title: "HAMBURGUESAS",
                description: "Clavate una hamburguesa",
                id_rubro: "11",
                id: "5",
                href: "{{ route('menu.show', 11) }}"

            },
            {
                image: "https://images.squarespace-cdn.com/content/v1/6023f1f539a4462914bca6af/5e9891a4-053e-4e27-9a64-7bd14a7faa0b/SFS_Picada_Argentina_31678+%281%29.jpeg",
                title: "PICADAS",
                description: "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
                id_rubro: "10",
                id: "6",
                href: "{{ route('menu.show', 10) }}"

            },
            {
                image: "https://images.unsplash.com/photo-1600335895229-6e75511892c8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80",
                title: "ENSALADAS",
                description: "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
                id_rubro: "9",
                id: "7",
                href: "{{ route('menu.show', 9) }}"

            },
            {
                image: "https://images.unsplash.com/photo-1609951651556-5334e2706168?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y29jdGVsZXN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
                title: "TRAGOS",
                description: "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
                id_rubro: "4",
                id: "8",
                href: "{{ route('menu.show', 4) }}"
            },
            {
                image: "https://images.unsplash.com/photo-1514178255089-603d3a35b24a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80",
                title: "BEBIDAS SIN ALCOHOL",
                description: "Espresso recipes are important in cafés in terms of consistency and flavour. How and why are the espresso recipes made and what are the things you should consider when making a recipe for espresso? Let’s dig deeper into the world of espresso!",
                id_rubro: "6",
                id: "9",
                href: "{{ route('menu.show', 6) }}"
            },
            {
                image: "https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cG9zdHJlc3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60",
                title: "POSTRES",
                description: "",
                id_rubro: "3",
                id: "10",
                href: "{{ route('menu.show', 3) }}"
            }
        ];
        return {
            posts
        };
    }

    // function openModal(id) {
    //     document.getElementById("mymodalcentered").showModal();
    //     document.body.setAttribute('style', 'overflow: hidden;');
    //     document.getElementById("mymodalcentered").children[0].scrollTop = 0;
    //     document.getElementById("mymodalcentered").children[0].classList.remove('opacity-0');
    //     document.getElementById("mymodalcentered").children[0].classList.add('opacity-100');
    //     Livewire.emit('productos', id);
    // }


    // function modalClose() {
    //     document.getElementById("mymodalcentered").children[0].classList.remove('opacity-100');
    //     document.getElementById("mymodalcentered").children[0].classList.add('opacity-0');
    //     setTimeout(function() {
    //         document.getElementById("mymodalcentered").close();
    //         document.body.removeAttribute('style');
    //     }, 100);
    // }
</script>
