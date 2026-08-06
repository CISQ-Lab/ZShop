<footer class="border-t border-gray-200 bg-gray-900 text-white">

    {{-- Contenido principal --}}
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Información de la tienda --}}
            <div>
                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3"
                >
                    <div
                        class="flex h-11 w-11 items-center justify-center
                               rounded-xl bg-blue-600 text-xl font-bold text-white"
                    >
                        T
                    </div>

                    <span class="text-xl font-bold">
                        {{ config('app.name') }}
                    </span>
                </a>

                <p class="mt-4 text-sm leading-6 text-gray-400">
                    Encuentra productos de diferentes tiendas y realiza
                    tus compras de forma sencilla, rápida y segura.
                </p>
            </div>

            {{-- Navegación --}}
            <div>
                <h2 class="text-sm font-semibold uppercase tracking-wider">
                    Navegación
                </h2>

                <ul class="mt-4 space-y-3 text-sm text-gray-400">
                    <li>
                        <a
                            href="{{ route('home') }}"
                            class="transition hover:text-white"
                        >
                            Inicio
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Productos
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Categorías
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Tiendas
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Ayuda --}}
            <div>
                <h2 class="text-sm font-semibold uppercase tracking-wider">
                    Atención al cliente
                </h2>

                <ul class="mt-4 space-y-3 text-sm text-gray-400">
                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Preguntas frecuentes
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Envíos y devoluciones
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Métodos de pago
                        </a>
                    </li>

                    <li>
                        <a
                            href="#"
                            class="transition hover:text-white"
                        >
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Redes sociales --}}
            <div>
                <h2 class="text-sm font-semibold uppercase tracking-wider">
                    Síguenos
                </h2>

                <p class="mt-4 text-sm leading-6 text-gray-400">
                    Conoce nuestras promociones, novedades y productos.
                </p>

                <div class="mt-5 flex items-center gap-3">

                    {{-- Facebook --}}
                    <a
                        href="#"
                        aria-label="Facebook"
                        class="flex h-10 w-10 items-center justify-center
                               rounded-full bg-gray-800 text-gray-400
                               transition hover:bg-blue-600 hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                d="M13.5 22v-9h3l.5-3h-3.5V8.1
                                   c0-.9.3-1.6 1.7-1.6H17V3.8
                                   c-.3 0-1.4-.1-2.6-.1
                                   -2.6 0-4.4 1.6-4.4 4.6V10H7v3h3v9h3.5Z"
                            />
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a
                        href="#"
                        aria-label="Instagram"
                        class="flex h-10 w-10 items-center justify-center
                               rounded-full bg-gray-800 text-gray-400
                               transition hover:bg-pink-600 hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            class="h-5 w-5"
                        >
                            <rect x="3" y="3" width="18" height="18" rx="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
                        </svg>
                    </a>

                    {{-- X / Twitter --}}
                    <a
                        href="#"
                        aria-label="X"
                        class="flex h-10 w-10 items-center justify-center
                               rounded-full bg-gray-800 text-gray-400
                               transition hover:bg-black hover:text-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                d="M18.2 2H22l-8.3 9.5L23.5 22h-7.7
                                   l-6-7.9L2.9 22H-1l9-10.3L-1.4 2
                                   h7.9l5.4 7.2L18.2 2Zm-1.3 18h2.1
                                   L5.4 3.9H3.1L16.9 20Z"
                            />
                        </svg>
                    </a>

                </div>
            </div>

        </div>

        {{-- Línea inferior --}}
        <div
            class="mt-12 flex flex-col gap-4 border-t border-gray-800
                   pt-6 text-sm text-gray-400
                   sm:flex-row sm:items-center sm:justify-between"
        >
            <p>
                © {{ now()->year }} {{ config('app.name') }}. Todos los derechos reservados.
            </p>

            <div class="flex flex-wrap gap-x-5 gap-y-2">
                <a href="#" class="transition hover:text-white">
                    Aviso de privacidad
                </a>

                <a href="#" class="transition hover:text-white">
                    Términos y condiciones
                </a>
            </div>
        </div>

    </div>

</footer>