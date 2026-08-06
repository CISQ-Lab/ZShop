@props(['company' => null])

<x-layouts.body>


    <!-- Sección de presentación de la empresa -->
    <section class="bg-white">

        {{-- Imagen de portada --}}
        <div class="relative h-30 overflow-hidden bg-gray-200 sm:h-40 lg:h-30">
            <img src="{{ Storage::url($company->banner_path) }}" alt="Portada de Comercializadora Ejemplo"
                class="h-full w-full object-cover">

            {{-- Capa oscura para mejorar la visibilidad --}}
            <div class="absolute inset-0 bg-black/20"></div>
        </div>

        {{-- Información principal --}}
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div
                class="relative flex flex-col gap-5 pb-8 items-center
                       sm:flex-row sm:items-end sm:justify-between">

                {{-- Perfil --}}
                <div
                    class="-mt-16 flex flex-col items-center justify-center text-center gap-4 bg-white p-5 rounded-2xl shadow-2xl sm:flex-row sm:items-end sm:gap-5 sm:text-left">

                    {{-- Imagen de perfil --}}

                    <img src="{{ Storage::url($company->logo_path) }}" alt="Logo de Comercializadora Ejemplo"
                        class="h-24 w-24 rounded-2xl border-4 border-white
                               bg-white object-cover shadow-lg sm:h-32 sm:w-32">

                    <div class="pb-1">
                        <h1 class="text-xl font-bold text-gray-900 sm:text-2xl">
                            {{ $company->name }}
                        </h1>

                        <p class="mt-1 text-gray-500">
                            {{ $company->description }}
                        </p>

                        <div class="mt-3 flex flex-wrap items-center justify-center gap-2 sm:justify-start">
                            <span
                                class="rounded-full bg-blue-50 px-3 py-1
                                       text-sm font-medium text-blue-700">
                                Tienda verificada
                            </span>

                            <span class="text-sm text-gray-500">
                                Zacapu, Michoacán
                            </span>
                        </div>
                    </div>

                </div>

                {{-- Acciones --}}
                <div class="flex flex-wrap gap-3">
                    <a href="#contacto"
                        class="rounded-xl border border-gray-300
                               bg-white px-5 py-2.5 text-sm font-semibold
                               text-gray-700 transition hover:bg-gray-50">
                        Contactar
                    </a>

                    <a href="#productos"
                        class="rounded-xl bg-blue-600 px-5 py-2.5
                               text-sm font-semibold text-white
                               transition hover:bg-blue-700">
                        Ver productos
                    </a>
                </div>

            </div>

        </div>

    </section>

    <section id="productos" class="bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-12 lg:px-8">

            {{-- Encabezado --}}
            <div class="mb-7 flex items-end justify-between gap-4">
                <div>
                    <h2 class="text-xl font-bold text-gray-900 sm:text-2xl">
                        Productos destacados
                    </h2>

                    <p class="mt-2 text-sm text-gray-500 sm:text-base">
                        Algunos de los productos principales de esta tienda.
                    </p>
                </div>

                <a href="#"
                    class="hidden shrink-0 text-sm font-semibold text-blue-600
                       transition hover:text-blue-700 sm:block">
                    Ver todos
                </a>
            </div>

            {{-- Productos --}}
            <div
                class="grid grid-cols-2 gap-3
                   sm:grid-cols-3 sm:gap-4
                   lg:grid-cols-4
                   xl:grid-cols-5">
                @foreach ($company->products as $product)
                    <article
                        class="group flex min-w-0 flex-col overflow-hidden
                           rounded-xl border border-gray-200 bg-white
                           transition duration-200
                           hover:-translate-y-1 hover:shadow-lg">
                        {{-- Imagen --}}
                        <a href="#" class="block aspect-square overflow-hidden bg-gray-100">
                            <img src="{{ Storage::url($product->images->first()->image_path) }}" alt="{{ $product->name }}"
                                class="h-full w-full object-cover transition
                                   duration-300 group-hover:scale-105">
                        </a>

                        {{-- Información --}}
                        <div class="flex flex-1 flex-col p-3 sm:p-4">

                            <span
                                class="block truncate text-[11px] font-medium
                                   text-gray-500 sm:text-xs">
                                Comercializadora Ejemplo
                            </span>

                            <h3
                                class="mt-1 line-clamp-2 min-h-10
                                   text-sm font-semibold leading-5
                                   text-gray-900 sm:text-base">
                                <a href="#" class="transition hover:text-blue-600">
                                    {{ $product['name'] }}
                                </a>
                            </h3>

                            {{-- Precio y botón siempre al fondo --}}
                            <div
                                class="mt-auto flex items-center
                                   justify-between gap-2 pt-3">
                                <span
                                    class="min-w-0 truncate text-base font-bold
                                       text-gray-900 sm:text-lg">
                                    ${{ number_format($product['price'], 2) }}
                                </span>

                                <button type="button"
                                    class="flex h-8 w-8 shrink-0 items-center
                                       justify-center rounded-lg bg-blue-600
                                       text-lg font-medium text-white
                                       transition hover:bg-blue-700
                                       focus:outline-none focus:ring-2
                                       focus:ring-blue-500
                                       focus:ring-offset-2
                                       sm:h-9 sm:w-9"
                                    aria-label="Agregar {{ $product['name'] }} al carrito">
                                    +
                                </button>
                            </div>

                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Enlace visible en móvil --}}
            <div class="mt-6 text-center sm:hidden">
                <a href="#"
                    class="inline-flex rounded-lg border border-blue-600
                       px-5 py-2.5 text-sm font-semibold text-blue-600
                       transition hover:bg-blue-50">
                    Ver todos los productos
                </a>
            </div>

        </div>
    </section>

    @php
        $galleryImages = [
            [
                'src' => asset('images/anuncio1.png'),
                'alt' => 'Fachada de la empresa',
            ],
            [
                'src' => asset('images/anuncio2.png'),
                'alt' => 'Interior de la empresa',
            ],
            [
                'src' => asset('images/anuncio3.png'),
                'alt' => 'Productos de la empresa',
            ],
            [
                'src' => asset('images/anuncio4.png'),
                'alt' => 'Área de atención al cliente',
            ],
        ];
    @endphp

    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">
                    Conoce nuestra tienda
                </h2>

                <p class="mt-2 text-gray-500">
                    Explora nuestras instalaciones, productos y espacios.
                </p>
            </div>

            <div x-data="{
                current: 0,
                images: @js($galleryImages),
                touchStartX: 0,
                touchEndX: 0,
            
                next() {
                    this.current =
                        this.current === this.images.length - 1 ?
                        0 :
                        this.current + 1;
                },
            
                previous() {
                    this.current =
                        this.current === 0 ?
                        this.images.length - 1 :
                        this.current - 1;
                },
            
                handleSwipe() {
                    const distance = this.touchStartX - this.touchEndX;
            
                    if (Math.abs(distance) < 50) {
                        return;
                    }
            
                    if (distance > 0) {
                        this.next();
                    } else {
                        this.previous();
                    }
                }
            }" class="relative mx-auto max-w-5xl" @keydown.right.window="next()"
                @keydown.left.window="previous()">
                {{-- Contenedor principal de la imagen --}}
                <div class="relative aspect-[16/9] overflow-hidden rounded-2xl
                       bg-gray-100 shadow-lg"
                    @touchstart="touchStartX = $event.changedTouches[0].screenX"
                    @touchend="
                    touchEndX = $event.changedTouches[0].screenX;
                    handleSwipe();
                ">
                    <template x-for="(image, index) in images" :key="index">
                        <img x-show="current === index" x-transition:enter="transition duration-300 ease-out"
                            x-transition:enter-start="opacity-0 scale-105"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition duration-200 ease-in" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" :src="image.src" :alt="image.alt"
                            class="absolute inset-0 h-full w-full select-none
                               object-cover"
                            draggable="false">
                    </template>

                    {{-- Capa oscura suave --}}
                    <div
                        class="pointer-events-none absolute inset-0
                           bg-gradient-to-t from-black/30
                           via-transparent to-transparent">
                    </div>

                    {{-- Flecha izquierda --}}
                    <button type="button" @click="previous()" aria-label="Ver imagen anterior"
                        class="absolute left-3 top-1/2 z-10 flex h-11 w-11
                           -translate-y-1/2 items-center justify-center
                           rounded-full bg-black/45 text-white
                           backdrop-blur-sm transition
                           hover:bg-black/65
                           focus:outline-none focus:ring-2
                           focus:ring-white sm:left-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" class="h-6 w-6">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                    </button>

                    {{-- Flecha derecha --}}
                    <button type="button" @click="next()" aria-label="Ver imagen siguiente"
                        class="absolute right-3 top-1/2 z-10 flex h-11 w-11
                           -translate-y-1/2 items-center justify-center
                           rounded-full bg-black/45 text-white
                           backdrop-blur-sm transition
                           hover:bg-black/65
                           focus:outline-none focus:ring-2
                           focus:ring-white sm:right-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" class="h-6 w-6">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </button>

                    {{-- Contador --}}
                    <div
                        class="absolute bottom-4 right-4 rounded-full
                           bg-black/55 px-3 py-1 text-sm font-medium
                           text-white backdrop-blur-sm">
                        <span x-text="current + 1"></span>
                        /
                        <span x-text="images.length"></span>
                    </div>
                </div>

                {{-- Indicadores inferiores --}}
                <div class="mt-5 flex justify-center gap-2">
                    <template x-for="(image, index) in images" :key="index">
                        <button type="button" @click="current = index" :aria-label="`Mostrar imagen ${index + 1}`"
                            class="h-2.5 rounded-full transition-all"
                            :class="current === index ?
                                'w-8 bg-blue-600' :
                                'w-2.5 bg-gray-300 hover:bg-gray-400'"></button>
                    </template>
                </div>

            </div>

        </div>
    </section>

    <!-- Sección de categorías destacadas -->

    <section class="border-t border-gray-100 bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

            <div class="mb-7">
                <h2 class="text-2xl font-bold text-gray-900">
                    Categorías destacadas
                </h2>

                <p class="mt-2 text-gray-500">
                    Explora los principales tipos de productos de esta tienda.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">

                @foreach ([['name' => 'Tecnología', 'icon' => '💻'], ['name' => 'Accesorios', 'icon' => '🎧'], ['name' => 'Hogar', 'icon' => '🏠'], ['name' => 'Ropa', 'icon' => '👕'], ['name' => 'Regalos', 'icon' => '🎁'], ['name' => 'Ofertas', 'icon' => '🏷️']] as $category)
                    <a href="#"
                        class="group rounded-2xl border border-gray-200
                           bg-white p-5 text-center transition
                           hover:-translate-y-1 hover:border-blue-200
                           hover:shadow-lg">
                        <div class="text-3xl">
                            {{ $category['icon'] }}
                        </div>

                        <h3
                            class="mt-3 text-sm font-semibold text-gray-800
                               group-hover:text-blue-600">
                            {{ $category['name'] }}
                        </h3>
                    </a>
                @endforeach

            </div>

        </div>
    </section>





    <section id="contacto" class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

            <div class="grid gap-8 lg:grid-cols-3">

                {{-- Acerca de --}}
                <div class="rounded-2xl border border-gray-200 p-6 lg:col-span-2">
                    <h2 class="text-xl font-bold text-gray-900">
                        Acerca de la empresa
                    </h2>

                    <p class="mt-4 leading-7 text-gray-600">
                        Somos una tienda dedicada a ofrecer productos de calidad
                        para nuestros clientes. Nuestro objetivo es brindar una
                        atención cercana, precios accesibles y una experiencia
                        de compra confiable.
                    </p>
                </div>

                {{-- Contacto --}}
                <div class="rounded-2xl border border-gray-200 p-6">
                    <h2 class="text-xl font-bold text-gray-900">
                        Información
                    </h2>

                    <dl class="mt-5 space-y-4 text-sm">

                        <div>
                            <dt class="font-medium text-gray-900">
                                Ubicación
                            </dt>
                            <dd class="mt-1 text-gray-500">
                                {{ $company->address }}
                            </dd>
                        </div>

                        <div>
                            <dt class="font-medium text-gray-900">
                                Horario
                            </dt>
                            <dd class="mt-1 text-gray-500">
                                Lunes a sábado, 9:00 a 18:00
                            </dd>
                        </div>

                        <div>
                            <dt class="font-medium text-gray-900">
                                Teléfono
                            </dt>
                            <dd class="mt-1 text-gray-500">
                                {{ $company->phone }}
                            </dd>
                        </div>

                    </dl>
                </div>

            </div>

        </div>
    </section>


</x-layouts.body>
