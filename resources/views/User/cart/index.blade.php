<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Cart Items Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-6">Shopping Cart</h3>
                    <div class="space-y-6">
                        <!-- Cart Item -->
                        <div class="flex items-center justify-between bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover rounded-lg">
                            <div class="ml-4 flex-1">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Product Name</h4>
                                <p class="text-gray-600 dark:text-gray-400">$99.99</p>
                                <div class="flex items-center mt-2">
                                    <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 px-2">-</button>
                                    <input type="number" value="1" class="w-12 text-center bg-gray-200 dark:bg-gray-600 border-none rounded-lg text-gray-900 dark:text-gray-100">
                                    <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 px-2">+</button>
                                </div>
                            </div>
                            <button class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <!-- Repeat Cart Item for more items -->
                        <div class="flex items-center justify-between bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover rounded-lg">
                            <div class="ml-4 flex-1">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Product Name</h4>
                                <p class="text-gray-600 dark:text-gray-400">$199.99</p>
                                <div class="flex items-center mt-2">
                                    <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 px-2">-</button>
                                    <input type="number" value="1" class="w-12 text-center bg-gray-200 dark:bg-gray-600 border-none rounded-lg text-gray-900 dark:text-gray-100">
                                    <button class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 px-2">+</button>
                                </div>
                            </div>
                            <button class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <!-- Add more cart items as needed -->
                    </div>
                </div>
            </div>

            <!-- Summary Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Order Summary</h3>
                <div class="space-y-2">
                    <div class="flex justify-between text-gray-900 dark:text-gray-100">
                        <span>Subtotal</span>
                        <span>$299.98</span>
                    </div>
                    <div class="flex justify-between text-gray-900 dark:text-gray-100">
                        <span>Tax</span>
                        <span>$29.99</span>
                    </div>
                    <div class="flex justify-between text-gray-900 dark:text-gray-100">
                        <span>Total</span>
                        <span>$329.97</span>
                    </div>
                </div>
                <div class="mt-6">
                    <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

