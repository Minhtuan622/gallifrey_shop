<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 shadow-lg fixed w-full z-10">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo and Brand Name -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('user.home.show') }}" class="flex items-center">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                        <span class="ml-3 text-xl font-bold text-gray-800 dark:text-gray-200">Gallifrey</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('user.home.show')" :active="request()->routeIs('user.home.show')">
                        <i class="fas fa-home mr-2"></i> {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.products.show')" :active="request()->routeIs('user.products.show')">
                        <i class="fas fa-box mr-2"></i> {{ __('Products') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.blogs.show')" :active="request()->routeIs('user.blogs.show')">
                        <i class="fas fa-blog mr-2"></i> {{ __('Blogs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.about-us.show')" :active="request()->routeIs('user.about-us.show')">
                        <i class="fas fa-info-circle mr-2"></i> {{ __('About Us') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.contact.show')" :active="request()->routeIs('user.contact.show')">
                        <i class="fas fa-envelope mr-2"></i> {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fas fa-user mr-2"></i> {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('user.cart.show')">
                            <i class="fas fa-shopping-cart mr-2"></i> {{ __('Cart') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('user.home.show')" :active="request()->routeIs('user.home.show')">
                <i class="fas fa-home mr-2"></i> {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.products.show')" :active="request()->routeIs('user.products.show')">
                <i class="fas fa-box mr-2"></i> {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.blogs.show')" :active="request()->routeIs('user.blogs.show')">
                <i class="fas fa-blog mr-2"></i> {{ __('Blogs') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.about-us.show')" :active="request()->routeIs('user.about-us.show')">
                <i class="fas fa-info-circle mr-2"></i> {{ __('About Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.contact.show')" :active="request()->routeIs('user.contact.show')">
                <i class="fas fa-envelope mr-2"></i> {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <i class="fas fa-user mr-2"></i> {{ __('Profile') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('user.cart.show')">
                    <i class="fas fa-shopping-cart mr-2"></i> {{ __('Cart') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Ensure your content below the navbar has enough top padding to avoid being hidden behind the fixed navbar -->
<div class="pt-16">
    <!-- Your content goes here -->
</div>
