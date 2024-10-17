<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('peliculas.index')" :active="request()->routeIs('peliculas.index')">
                        {{ __('Peliculas') }}
                    </x-nav-link>
                    <x-nav-link :href="route('directores.index')" :active="request()->routeIs('directores.index')">
                        {{ __('Directores') }}
                    </x-nav-link>
                    <x-nav-link :href="route('actores.index')" :active="request()->routeIs('actores.index')">
                        {{ __('Actores') }}
                    </x-nav-link>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>Mas</div>

                                <div class="ms-1">
                                    <x-icons.chevron />
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="flex flex-col">
                                <x-nav-link :href="route('personajes.index')" :active="request()->routeIs('personajes.index')">
                                    {{ __('Personajes') }}
                                </x-nav-link>
                                <x-nav-link :href="route('cines.index')" :active="request()->routeIs('cines.index')">
                                    {{ __('Cines') }}
                                </x-nav-link>
                                <x-nav-link :href="route('salas.index')" :active="request()->routeIs('salas.index')">
                                    {{ __('Salas') }}
                                </x-nav-link>

                                <x-nav-link :href="route('funciones.index')" :active="request()->routeIs('funciones.index')">
                                    {{ __('Función') }}
                                </x-nav-link>
                                <x-nav-link :href="route('promociones.index')" :active="request()->routeIs('promociones.index')">
                                    {{ __('Promociones') }}
                                </x-nav-link>
                                <x-nav-link :href="route('opiniones.index')" :active="request()->routeIs('opiniones.index')">
                                    {{ __('Opiniones') }}
                                </x-nav-link>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <x-icons.chevron />

                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden fixed top-16 left-0 w-full z-50">
        <div class="pt-2 pb-3 space-y-1 bg-white dark:bg-gray-800">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('peliculas.index')" :active="request()->routeIs('peliculas.index')">
                {{ __('Peliculas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('directores.index')" :active="request()->routeIs('directores.index')">
                {{ __('Directores') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('actores.index')" :active="request()->routeIs('actores.index')">
                {{ __('Actores') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('personajes.index')" :active="request()->routeIs('personajes.index')">
                {{ __('Personajes') }}
            </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('salas.index')" :active="request()->routeIs('salas.index')">
                {{ __('Salas') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

</nav>
