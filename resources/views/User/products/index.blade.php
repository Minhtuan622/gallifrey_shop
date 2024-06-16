<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Search Bar -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
                <div class="relative">
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Search products...">
                    <i class="fa fa-search absolute right-3 top-3 text-gray-500 dark:text-gray-400"></i>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row">
                <!-- Category List -->
                <div class="w-full lg:w-1/4 mb-6 lg:mb-0 lg:mr-6">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-gray-100">Categories</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="block px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600">All</a></li>
                            <li><a href="#" class="block px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600">Category 1</a></li>
                            <li><a href="#" class="block px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600">Category 2</a></li>
                            <li><a href="#" class="block px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600">Category 3</a></li>
                            <!-- Add more categories as needed -->
                        </ul>
                    </div>
                </div>

                <!-- Product Grid Section -->
                <div class="w-full lg:w-3/4">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h3 class="text-2xl font-bold mb-6">Our Products</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <x-product-card
                                    navigate="{{ route('user.products.detail') }}"
                                    image="https://via.placeholder.com/300"
                                    name="Product Name 1"
                                    price="$99.99"
                                    description="This is a brief description of the product."
                                />
                                <x-product-card
                                    navigate="{{ route('user.products.detail') }}"
                                    image="https://via.placeholder.com/300"
                                    name="Product Name 2"
                                    price="$199.99"
                                    description="This is another brief description of the product."
                                />
                                <x-product-card
                                    navigate="{{ route('user.products.detail') }}"
                                    image="https://via.placeholder.com/300"
                                    name="Product Name 3"
                                    price="$299.99"
                                    description="This is yet another brief description of the product."
                                />
                                <!-- Add more product cards as needed -->
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Section -->
                    <div class="mt-6">
                        <nav class="flex justify-between">
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                Previous
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                Next
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

