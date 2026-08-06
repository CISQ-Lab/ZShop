<header class="sticky top-0 z-50 border-b border-gray-200 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-20 items-center gap-6">

            {{-- Lado izquierdo: logo --}}
            <div class="shrink-0">
                <a href="{{ route('home') }}" class="flex items-center gap-3">

                    <div
                        class="flex h-11 w-11 items-center justify-center
                               rounded-xl bg-blue-600 text-xl font-bold text-white"
                    >
                        T
                    </div>

                    <span class="hidden text-xl font-bold text-gray-900 sm:block">
                        {{ config('app.name') }}
                    </span>

                </a>
            </div>

            {{-- Centro: buscador --}}
            <div class="hidden flex-1 md:block">

                <form action="#" method="GET" class="mx-auto max-w-2xl">

                    <div class="relative">

                        <svg
                            class="absolute left-4 top-1/2 h-5 w-5
                                   -translate-y-1/2 text-gray-400"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>

                        <input
                            type="search"
                            name="search"
                            placeholder="Buscar productos..."
                            class="w-full rounded-xl border border-gray-300
                                   bg-gray-50 py-3 pl-12 pr-4
                                   text-sm text-gray-900 outline-none
                                   transition
                                   placeholder:text-gray-400
                                   focus:border-blue-500
                                   focus:bg-white
                                   focus:ring-4
                                   focus:ring-blue-100"
                        >

                    </div>

                </form>

            </div>

            {{-- Lado derecho: acciones --}}
            <nav class="ml-auto flex shrink-0 items-center gap-1">

                {{-- Tiendas --}}
                <a
                    href="#"
                    class="flex h-11 items-center gap-2 rounded-xl
                           px-3 text-gray-600 transition
                           hover:bg-gray-100 hover:text-blue-600"
                >
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M3 9l2-5h14l2 5" />
                        <path d="M5 13v7h14v-7" />
                        <path d="M3 9a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 6 0" />
                    </svg>

                    <span class="hidden text-sm font-medium lg:block">
                        Tiendas
                    </span>
                </a>

                {{-- Cuenta --}}
                <a
                    href="#"
                    class="flex h-11 items-center gap-2 rounded-xl
                           px-3 text-gray-600 transition
                           hover:bg-gray-100 hover:text-blue-600"
                >
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 21a8 8 0 0 1 16 0" />
                    </svg>

                    <span class="hidden text-sm font-medium lg:block">
                        Cuenta
                    </span>
                </a>

                {{-- Carrito --}}
                <a
                    href="#"
                    class="relative flex h-11 items-center gap-2 rounded-xl
                           px-3 text-gray-600 transition
                           hover:bg-gray-100 hover:text-blue-600"
                >
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M6 6h15l-2 8H8L6 3H3" />
                        <circle cx="9" cy="20" r="1" />
                        <circle cx="18" cy="20" r="1" />
                    </svg>

                    <span class="hidden text-sm font-medium lg:block">
                        Carrito
                    </span>

                    <span
                        class="absolute right-0 top-0 flex h-5 min-w-5
                               items-center justify-center rounded-full
                               bg-red-500 px-1 text-xs font-bold text-white"
                    >
                        0
                    </span>
                </a>

            </nav>

        </div>

    </div>
</header>