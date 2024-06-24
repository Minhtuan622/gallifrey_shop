<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 shadow-lg fixed w-full z-10">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo and Brand Name -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('admin.dashboard.show') }}" class="flex items-center">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                        <span class="ml-3 text-xl font-bold text-gray-800 dark:text-gray-200">{{ __('Gallifrey Admin') }}</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.dashboard.show')" :active="request()->routeIs('admin.dashboard.show')">
                        <i class="fas fa-tachometer-alt mr-2"></i> {{ __('Dashboard') }}
                    </x-nav-link>
                    <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <span>Manage</span>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('admin.orders.show')">
                                    <i class="fas fa-shopping-cart mr-2"></i> {{ __('Manage Orders') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.products.show')">
                                    <i class="fas fa-box mr-2"></i> {{ __('Manage Products') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.blogs.show')">
                                    <i class="fas fa-newspaper mr-2"></i> {{ __('Manage Posts') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.users.show')">
                                    <i class="fas fa-users mr-2"></i> {{ __('Manage Users') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                <!-- Notifications Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = ! open" class="relative">
                        <i class="fas fa-bell text-gray-500 dark:text-gray-400"></i>
                        <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Notification 1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Notification 2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Notification 3</a>
                        </div>
                    </div>
                </div>

                <!-- Chat Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = ! open" class="relative">
                        <i class="fas fa-comments text-gray-500 dark:text-gray-400"></i>
                        <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Chat Message 1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Chat Message 2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Chat Message 3</a>
                        </div>
                    </div>
                </div>

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

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('admin.logout')"
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
            <x-responsive-nav-link :href="route('admin.dashboard.show')" :active="request()->routeIs('admin.dashboard.show')">
                <i class="fas fa-tachometer-alt mr-2"></i> {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.orders.show')" :active="request()->routeIs('admin.orders.show')">
                <i class="fas fa-shopping-cart mr-2"></i> {{ __('Manage Orders') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.products.show')" :active="request()->routeIs('admin.products.show')">
                <i class="fas fa-box mr-2"></i> {{ __('Manage Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.blogs.show')" :active="request()->routeIs('admin.posts.show')">
                <i class="fas fa-newspaper mr-2"></i> {{ __('Manage Posts') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.users.show')" :active="request()->routeIs('admin.users.show')">
                <i class="fas fa-users mr-2"></i> {{ __('Manage Users') }}
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

                <!-- Authentication -->
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('admin.logout')"
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
