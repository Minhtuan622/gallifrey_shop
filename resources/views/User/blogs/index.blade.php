<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Search and Categories -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Search Bar -->
                <div>
                    <input
                        type="text"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                        placeholder="Search for blog posts..."
                        x-model="search"
                    />
                </div>

                <!-- Categories -->
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100 mb-2">
                        Categories
                    </h3>
                    <div class="flex flex-wrap">
                        <a href="#"
                           class="mr-2 mb-2 px-3 py-1 bg-indigo-600 text-white text-sm rounded-lg hover:bg-indigo-700">
                            All
                        </a>
                        <a href="#"
                           class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                            Stars
                        </a>
                        <a href="#"
                           class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                            Planets
                        </a>
                        <a href="#"
                           class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                            Galaxies
                        </a>
                        <a href="#"
                           class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                            Telescopes
                        </a>
                        <a href="#"
                           class="mr-2 mb-2 px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 text-sm rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                            Space Missions
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Posts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($blogs as $blog)
                    <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                        <a href="{{ route('user.blogs.showDetail', $blog) }}">
                            <img class="w-full h-48 object-cover" src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
                        </a>
                        <div class="p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100 mb-2">
                                <a href="{{ route('user.blogs.showDetail', $blog) }}" class="hover:underline">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                {{ Str::limit($blog->content, 100) }}
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                    {{ $blog->published_at }}
                                </div>
                                <a href="{{ route('user.blogs.showDetail', $blog) }}"
                                   class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
