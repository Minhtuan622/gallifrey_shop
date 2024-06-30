<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6">
                <input type="text"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 focus:outline-none focus:ring focus:ring-blue-300"
                       placeholder="Search products...">
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Category List -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-gray-100">Categories</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#"
                               class="block px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                All
                            </a>
                        </li>
{{--                        @foreach ($categories as $category)--}}
{{--                            <li>--}}
{{--                                <a href="#"--}}
{{--                                   class="block px-4 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                                    {{ $category->name }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
                    </ul>
                </div>

                <!-- Product Grid Section -->
                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h3 class="text-2xl font-bold mb-6">Our Products</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
{{--                                @foreach ($products as $product)--}}
{{--                                    <x-product-card :product="$product" />--}}
{{--                                @endforeach--}}
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Section -->
                    <div class="mt-6">
{{--                        {{ $products->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
