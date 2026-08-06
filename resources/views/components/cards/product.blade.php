@props([
    'product',
])

@php
    $primaryImage = $product->images
        ->firstWhere('is_primary', true)
        ?? $product->images->first();

    $imageUrl = $primaryImage
        ? Storage::url($primaryImage->image_path)
        : asset('images/product-placeholder.webp');

    $categoryName = $product->category?->name ?? 'Sin categoría';
    $hasStock = ($product->stock ?? 0) > 0;
@endphp

<article
    class="group flex h-full min-w-0 flex-col overflow-hidden
           rounded-2xl border border-gray-200 bg-white
           transition duration-200
           hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg"
>
    {{-- Imagen --}}
    <a
        href="#"
        class="relative block aspect-[4/3] overflow-hidden bg-gray-100"
    >
        <img
            src="{{ $imageUrl }}"
            alt="{{ $primaryImage?->alt_text ?? $product->name }}"
            loading="lazy"
            class="h-full w-full object-cover transition duration-300
                   group-hover:scale-105"
        >

        {{-- Estado de inventario --}}
        @if (!$hasStock)
            <span
                class="absolute left-2 top-2 rounded-full bg-gray-900/85
                       px-2.5 py-1 text-[11px] font-semibold text-white"
            >
                Agotado
            </span>
        @elseif ($product->is_featured ?? false)
            <span
                class="absolute left-2 top-2 rounded-full bg-blue-600
                       px-2.5 py-1 text-[11px] font-semibold text-white"
            >
                Destacado
            </span>
        @endif

        {{-- Botón de favoritos opcional --}}
        <button
            type="button"
            class="absolute right-2 top-2 flex h-8 w-8 items-center
                   justify-center rounded-full bg-white/90 text-gray-600
                   shadow-sm backdrop-blur-sm transition
                   hover:bg-white hover:text-red-500"
            aria-label="Agregar {{ $product->name }} a favoritos"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                class="h-4 w-4"
            >
                <path
                    d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1
                       a5.5 5.5 0 0 0-7.8 7.8l1.1 1.1L12 21l7.8-7.5
                       1.1-1.1a5.5 5.5 0 0 0-.1-7.8Z"
                />
            </svg>
        </button>
    </a>

    {{-- Información --}}
    <div class="flex flex-1 flex-col p-3.5">

        <span
            class="truncate text-[11px] font-medium uppercase
                   tracking-wide text-gray-400"
        >
            {{ $categoryName }}
        </span>

        <h3
            class="mt-1 line-clamp-2 min-h-10  font-semibold
                    text-gray-900"
        >
            <a href="#" class="transition hover:text-blue-600">
                {{ $product->name }}
            </a>
        </h3>

        @if ($product->description)
            <p class="mt-1 line-clamp-1 text-xs text-gray-500">
                {{ $product->description }}
            </p>
        @endif

        {{-- Precio --}}
        <div class="mt-3 flex flex-wrap items-baseline gap-x-2 gap-y-1">
            <span class="text-lg font-bold text-gray-900">
                ${{ number_format($product->price, 2) }}
            </span>

            @if (
                isset($product->compare_price) &&
                $product->compare_price > $product->price
            )
                <span class="text-xs text-gray-400 line-through">
                    ${{ number_format($product->compare_price, 2) }}
                </span>
            @endif
        </div>

        {{-- Acciones --}}
        <div class="mt-auto flex items-center gap-2 pt-3">
            <a
                href="#"
                class="flex h-9 flex-1 items-center justify-center
                       rounded-lg border border-gray-300 px-3
                       text-xs font-semibold text-gray-700
                       transition hover:border-blue-300
                       hover:bg-blue-50 hover:text-blue-700"
            >
                Ver producto
            </a>

            <button
                type="button"
                @disabled(!$hasStock)
                class="flex h-9 w-9 shrink-0 items-center justify-center
                       rounded-lg bg-blue-600 text-white transition
                       hover:bg-blue-700
                       focus:outline-none focus:ring-2
                       focus:ring-blue-500 focus:ring-offset-2
                       disabled:cursor-not-allowed disabled:bg-gray-300"
                aria-label="Agregar {{ $product->name }} al carrito"
                title="Agregar al carrito"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    class="h-4.5 w-4.5"
                >
                    <path d="M6 6h15l-2 8H8L6 3H3" />
                    <circle cx="9" cy="20" r="1" />
                    <circle cx="18" cy="20" r="1" />
                    <path d="M12 9v4M10 11h4" />
                </svg>
            </button>
        </div>

    </div>
</article>
