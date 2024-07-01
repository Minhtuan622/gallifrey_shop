<x-app-layout>
    <div class="py-12 bg-gradient-to-br from-gray-900 via-purple-900 to-blue-900 relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 bg-repeat bg-[length:100px_100px] opacity-20" style="background-image: radial-gradient(circle at 50% 100%, rgba(255, 255, 255, 0.1) 2px, transparent 0)"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <h3 class="text-3xl font-extrabold text-white mb-8 text-center">Shopping Cart</h3>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Cart Items -->
                <div class="lg:w-2/3 space-y-6">
                    {{-- Cart Item --}}
                    <div class="bg-white/10 backdrop-blur-md shadow-lg rounded-lg p-6 transform hover:scale-102 transition duration-300 ease-in-out">
                        <div class="flex flex-col gap-5">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover rounded-lg mr-6">
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-gray-200">Product Name</h4>
                                <p class="text-gray-400">$99.99</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center border border-gray-600 rounded-md">
                                    <button class="px-3 py-1 text-gray-400 hover:text-gray-200">-</button>
                                    <span class="px-3 py-1 text-gray-200">1</span>
                                    <button class="px-3 py-1 text-gray-400 hover:text-gray-200">+</button>
                                </div>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/100" alt="Product Image" class="w-24 h-24 object-cover rounded-lg mr-6">
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-gray-200">Product Name</h4>
                                <p class="text-gray-400">$99.99</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center border border-gray-600 rounded-md">
                                    <button class="px-3 py-1 text-gray-400 hover:text-gray-200">-</button>
                                    <span class="px-3 py-1 text-gray-200">1</span>
                                    <button class="px-3 py-1 text-gray-400 hover:text-gray-200">+</button>
                                </div>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- Repeat Cart Item for more items --}}
                </div>

                <!-- Order Summary -->
                <div class="lg:w-1/3 space-y-6">
                    <div class="bg-white/10 backdrop-blur-md shadow-lg rounded-lg p-6 sticky top-6">
                        <h3 class="text-2xl font-semibold text-gray-200 mb-6">Order Summary</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between text-gray-400">
                                <span>Subtotal</span>
                                <span>$299.98</span>
                            </div>
                            <div class="flex justify-between text-gray-400">
                                <span>Tax</span>
                                <span>$29.99</span>
                            </div>
                            <hr class="border-gray-600">
                            <div class="flex justify-between text-gray-200 font-bold">
                                <span>Total</span>
                                <span>$329.97</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <h4 class="text-lg font-semibold text-gray-200 mb-3">Payment Method</h4>
                            <div class="space-y-3">
                                <label class="flex items-center space-x-3">
                                    <input type="radio" name="payment_method" value="credit_card" class="form-radio text-indigo-500">
                                    <span class="text-gray-400">Credit Card</span>
                                </label>
                                <label class="flex items-center space-x-3">
                                    <input type="radio" name="payment_method" value="paypal" class="form-radio text-indigo-500">
                                    <span class="text-gray-400">PayPal</span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg transform hover:scale-105 transition duration-300 ease-in-out">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customer Information -->
            <div class="bg-white/10 backdrop-blur-md shadow-lg rounded-lg p-6 mt-8">
                <h3 class="text-2xl font-semibold text-gray-200 mb-6">Customer Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-200">First Name</label>
                        <p class="mt-1 text-gray-200">Minh Tuan</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200">Last Name</label>
                        <p class="mt-1 text-gray-200">Nguyen</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200">Email</label>
                        <p class="mt-1 text-gray-200">minhtuannguyen22062001@gmail.com</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200">Phone</label>
                        <p class="mt-1 text-gray-200">0363665775</p>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-200">Address</label>
                        <p class="mt-1 text-gray-200">Binh Thanh</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200">City</label>
                        <p class="mt-1 text-gray-200">Ho Chi Minh city</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200">State</label>
                        <p class="mt-1 text-gray-200">state</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-200">Zip Code</label>
                        <p class="mt-1 text-gray-200">10000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
