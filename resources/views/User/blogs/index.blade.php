<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Search Bar -->
            <div class="mb-6">
                <input
                    type="text"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                    placeholder="Search for blog posts..."
                    x-model="search"
                />
            </div>

            <!-- Categories -->
            <div class="mb-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                    Categories
                </h3>
                <div class="flex flex-wrap mt-2">
                    <a href="#" class="mr-2 mb-2 px-3 py-1 bg-indigo-600 text-white text-sm rounded-lg hover:bg-indigo-700">All</a>
                    <a href="#" class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">Stars</a>
                    <a href="#" class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">Planets</a>
                    <a href="#" class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">Galaxies</a>
                    <a href="#" class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">Telescopes</a>
                    <a href="#" class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">Space Missions</a>
                </div>
            </div>

            <!-- Blog Posts -->
            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                        Blog Posts
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                        Latest articles and posts about astronomy.
                    </p>
                </div>

                <div class="border-t border-gray-200 dark:border-gray-700">
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                        <!-- Example Blog Post -->
                        <li class="px-4 py-6 sm:px-6 flex items-center space-x-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                            <img class="h-24 w-24 rounded-md object-cover" src="https://via.placeholder.com/150" alt="Understanding the Universe">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-indigo-600 dark:text-indigo-300">
                                        <a href="{{ route('user.blogs.showDetail') }}" class="hover:underline">
                                            Understanding the Universe
                                        </a>
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p class="text-sm text-gray-500 dark:text-gray-300">
                                            June 6, 2024
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                    <p>This article delves into the mysteries of the universe, exploring the latest discoveries and theories in astronomy.</p>
                                </div>
                                <div class="mt-3 text-sm">
                                    <a href="{{ route('user.blogs.showDetail') }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- More blog posts... -->
                        <li class="px-4 py-6 sm:px-6 flex items-center space-x-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                            <img class="h-24 w-24 rounded-md object-cover" src="https://via.placeholder.com/150" alt="Exploring the Stars">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-indigo-600 dark:text-indigo-300">
                                        <a href="{{ route('user.blogs.showDetail') }}" class="hover:underline">
                                            Exploring the Stars
                                        </a>
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p class="text-sm text-gray-500 dark:text-gray-300">
                                            June 5, 2024
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                    <p>Learn about the different types of stars, their life cycles, and the wonders they hold.</p>
                                </div>
                                <div class="mt-3 text-sm">
                                    <a href="{{ route('user.blogs.showDetail') }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="px-4 py-6 sm:px-6 flex items-center space-x-4 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                            <img class="h-24 w-24 rounded-md object-cover" src="https://via.placeholder.com/150" alt="The Mysteries of Black Holes">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-indigo-600 dark:text-indigo-300">
                                        <a href="{{ route('user.blogs.showDetail') }}" class="hover:underline">
                                            The Mysteries of Black Holes
                                        </a>
                                    </div>
                                    <div class="ml-2 flex-shrink-0 flex">
                                        <p class="text-sm text-gray-500 dark:text-gray-300">
                                            June 4, 2024
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                    <p>An in-depth look at black holes, their formation, and the current research surrounding them.</p>
                                </div>
                                <div class="mt-3 text-sm">
                                    <a href="{{ route('user.blogs.showDetail') }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <!-- Page Numbers -->
                    <a href="#" aria-current="page" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-indigo-600 text-sm font-medium text-white dark:bg-indigo-500">
                        1
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                        2
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                        3
                    </a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</x-app-layout>
