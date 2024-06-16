<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Blog Post Content -->
            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                        Understanding the Universe
                    </h1>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                        Published on June 6, 2024 by John Doe
                    </p>
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <img class="w-full h-auto rounded-md" src="https://via.placeholder.com/1200x600" alt="Understanding the Universe">
                    <div class="mt-4 text-lg text-gray-900 dark:text-gray-100">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat urna a nisi congue, sit amet scelerisque risus ultricies. Integer luctus bibendum tellus, nec vulputate massa efficitur non. Aenean nec purus id justo feugiat fringilla. Duis nec lacinia risus, ut ultricies ex. Nulla facilisi. Nulla fringilla ipsum et erat ultrices, id volutpat nunc bibendum.</p>
                        <p class="mt-4">Suspendisse potenti. Sed et justo ac nunc faucibus finibus. Vestibulum ac pharetra sapien. Nulla facilisi. Praesent ut dolor in arcu vehicula pharetra. In vel purus ac massa luctus gravida sed id sem. Integer vitae libero purus. Proin varius lacus vel diam volutpat, ut lacinia ex lacinia. Nulla facilisi. Donec at ipsum id quam congue laoreet.</p>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        Comments
                    </h2>
                    <div class="mt-4 space-y-6">
                        <!-- Example Comment -->
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="User avatar">
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                    Jane Smith
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                    June 7, 2024
                                </div>
                                <div class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p>This is a very insightful article. Thank you for sharing your knowledge!</p>
                                </div>
                            </div>
                        </div>
                        <!-- More comments... -->

                        <!-- Comment Form -->
                        <div class="mt-6">
                            <form>
                                <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200" rows="3" placeholder="Add a comment..."></textarea>
                                <button type="submit" class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Posts Section -->
            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        Related Posts
                    </h2>
                    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Example Related Post -->
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300" alt="Exploring the Stars">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                    <a href="{{ route('user.blogs.showDetail') }}" class="hover:underline">Exploring the Stars</a>
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                    June 5, 2024
                                </p>
                            </div>
                        </div>
                        <!-- More related posts... -->
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300" alt="The Mysteries of Black Holes">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                    <a href="{{ route('user.blogs.showDetail') }}" class="hover:underline">The Mysteries of Black Holes</a>
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                    June 4, 2024
                                </p>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300" alt="Understanding Galaxies">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">
                                    <a href="{{ route('user.blogs.showDetail') }}" class="hover:underline">Understanding Galaxies</a>
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                                    June 3, 2024
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
