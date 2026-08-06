@props(['category'])

@php
    /*
     * Los colores se seleccionan usando el ID de la categoría.
     * Así cada categoría conserva normalmente el mismo estilo
     * y no cambia de color cada vez que se recarga la página.
     */
    $backgrounds = [
        'from-blue-500 to-indigo-700',
        'from-emerald-500 to-teal-700',
        'from-orange-400 to-red-600',
        'from-purple-500 to-fuchsia-700',
        'from-cyan-500 to-blue-700',
        'from-amber-400 to-orange-600',
        'from-pink-500 to-rose-700',
        'from-lime-500 to-green-700',
    ];

    $backgroundIndex = ($category->id ?? 0) % count($backgrounds);
    $backgroundColor = $backgrounds[$backgroundIndex];

    /*
     * Cambia "image_path" por el nombre real de tu columna
     * cuando agregues imágenes a las categorías.
     */
    $hasImage = !empty($category->image_path);

    $imageUrl = $hasImage ? Storage::disk('public')->url($category->image_path) : null;
@endphp

<a href="#"
    class="group relative block min-h-[170px] overflow-hidden
           rounded-2xl border border-white/20 shadow-sm
           transition duration-300
           hover:-translate-y-1 hover:shadow-xl
           focus:outline-none focus:ring-2
           focus:ring-blue-500 focus:ring-offset-2">
    {{-- Fondo de imagen o degradado --}}
    @if ($hasImage)
        <img src="{{ $imageUrl }}" alt="{{ $category->name }}" loading="lazy"
            class="absolute inset-0 h-full w-full object-cover
               transition duration-500 group-hover:scale-105">

        {{-- Color dinámico sobre la imagen --}}
        <div class="absolute inset-0 bg-gradient-to-br
               {{ $backgroundColor }} opacity-45"></div>

        {{-- Oscurecimiento inferior --}}
        <div class="absolute inset-0 bg-gradient-to-t
               from-black/80 via-black/20 to-transparent"></div>
    @else
        <div class="absolute inset-0 bg-gradient-to-br {{ $backgroundColor }}"></div>

        {{-- Decoración mientras no exista una imagen --}}
        <div
            class="absolute -right-8 -top-8 h-32 w-32
                   rounded-full bg-white/10 transition duration-500
                   group-hover:scale-125">
        </div>

        <div class="absolute -bottom-10 -left-8 h-28 w-28
                   rounded-full bg-black/10"></div>

        {{-- Icono temporal --}}
        <div
            class="absolute right-5 top-5 flex h-11 w-11
                   items-center justify-center rounded-xl
                   bg-white/15 text-white backdrop-blur-sm
                   transition group-hover:bg-white/25">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" class="h-6 w-6" aria-hidden="true">
                <path d="M4 4h6v6H4z" />
                <path d="M14 4h6v6h-6z" />
                <path d="M4 14h6v6H4z" />
                <path d="M14 14h6v6h-6z" />
            </svg>
        </div>
    @endif

    {{-- Capa para mejorar la lectura --}}
    <div class="absolute inset-0 bg-gradient-to-t
               from-black/80 via-black/25 to-transparent"></div>

    {{-- Contenido --}}
    <div class="relative z-10 flex min-h-[170px] flex-col
               justify-end p-5">
        <span class="mb-2 text-xs font-semibold uppercase
                   tracking-[0.18em] text-white/75">
            Categoría
        </span>

        <h2
            class="line-clamp-1 text-xl font-bold leading-tight
                   text-white drop-shadow-sm sm:text-2xl">
            {{ $category->name }}
        </h2>

        @if ($category->description)
            <p class="mt-2 line-clamp-2 max-w-md text-sm
                       leading-5 text-white/85">
                {{ $category->description }}
            </p>
        @endif

        <div class="mt-4 flex items-center gap-2 text-sm
                   font-semibold text-white">
            <span>Explorar productos</span>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" class="h-4 w-4 transition-transform
                       group-hover:translate-x-1"
                aria-hidden="true">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </div>
    </div>
</a>
