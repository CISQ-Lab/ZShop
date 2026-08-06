
<x-layouts.body title="Inicio">

    <section class="relative h-[350px] sm:h-[380px] lg:h-[460px] ">

        <img
            src="{{ asset('images/porta.png') }}"
            alt="Portada de la tienda"
            class="absolute inset-0 h-full w-full object-cover object-center"
        >

        <div class="absolute inset-0 bg-black/30"></div>

        <div
            class="absolute inset-0
                   bg-gradient-to-r from-black/65 via-black/25 to-transparent"
        ></div>

        <div
            class="relative z-10 mx-auto flex h-full max-w-7xl
                   items-center px-4 py-10 sm:px-6 lg:px-8"
        >
            <div class="max-w-xl text-center text-white sm:text-left my-5">

                <span
                    class="inline-flex rounded-full border border-white/30
                           bg-white/15 px-4 py-1.5 text-xs font-semibold
                           uppercase tracking-wider backdrop-blur-sm mt-5"
                >
                    Compra local, descubre más
                </span>

                <h1
                    class="mt-4 text-3xl font-bold leading-tight
                           drop-shadow-lg sm:text-4xl lg:text-5xl"
                >
                    Encuentra productos increíbles cerca de ti
                </h1>

                <p
                    class="mx-auto mt-4 max-w-lg text-sm leading-6
                           text-white/90 drop-shadow
                           sm:mx-0 sm:text-base"
                >
                    Explora tiendas, descubre nuevos productos y apoya a
                    emprendedores de tu comunidad.
                </p>

                <div
                    class="mt-6 flex flex-col justify-center gap-3
                           sm:flex-row sm:justify-start"
                >
                    <a
                        href="#productos"
                        class="rounded-xl bg-blue-600 px-5 py-2.5
                               text-sm font-semibold text-white
                               transition hover:bg-blue-700"
                    >
                        Explorar productos
                    </a>

                    <a
                        href="#tiendas"
                        class="rounded-xl border border-white/50
                               bg-white/10 px-5 py-2.5 text-sm
                               font-semibold text-white backdrop-blur-sm
                               transition hover:bg-white hover:text-gray-900"
                    >
                        Ver tiendas
                    </a>
                </div>

            </div>
        </div>

    </section>

    <section id="productos" class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900">Productos destacados</h2>

        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <x-cards.product :product="$product" />
            @endforeach
        </div>

    </section>

    <section id="tiendas" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900">Categorías</h2>
        <p class="text-gray-600">Explora algunas de nuestras categorías</p>

        <div class="mt-6 grid grid-cols-2 gap-6 p-4 text-center">
            @foreach ($categories as $category)
                <x-cards.category :category="$category" />
            @endforeach
        </div>

    </section>

</x-layouts.body>
