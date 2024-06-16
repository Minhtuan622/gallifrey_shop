<x-app-layout>

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen"
         style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-24 text-center text-white">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">Explore the Universe with Our Astronomical Equipment</h1>
            <p class="text-xl mb-8">Discover the best telescopes, binoculars, and accessories for stargazing.</p>
            <a href="{{ route('user.products.show') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg">Shop Now</a>
        </div>
    </div>

    <!-- Featured products Section -->
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">Featured Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-product-card
                    navigate="{{ route('user.products.detail') }}"
                    image="https://via.placeholder.com/300"
                    name="Telescope XYZ"
                    price="$499.99"
                    description="A high-quality telescope for astronomy enthusiasts."
                />
                <x-product-card
                    navigate="{{ route('user.products.detail') }}"
                    image="https://via.placeholder.com/300"
                    name="Binoculars ABC"
                    price="$249.99"
                    description="Perfect binoculars for stargazing and bird watching."
                />
                <x-product-card
                    navigate="{{ route('user.products.detail') }}"
                    image="https://via.placeholder.com/300"
                    name="Star Map 2024"
                    price="$19.99"
                    description="Detailed star map for tracking constellations."
                />
                <!-- Add more product cards as needed -->
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-12 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">Shop by Category</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Telescopes</h3>
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Binoculars</h3>
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Accessories</h3>
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Books & Maps</h3>
                </div>
                <!-- Add more categories as needed -->
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">About Us</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300">
                We are passionate about helping people explore the wonders of the night sky. Our mission is to provide
                the best products and customer service to make your stargazing experience unforgettable.
            </p>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-12 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-8">What Our Customers Say</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 dark:text-gray-300">
                        "The telescope I bought is amazing! The views of the moon and planets are stunning. Highly
                        recommend!"
                    </p>
                    <p class="mt-4 text-sm font-bold text-gray-900 dark:text-gray-100">- John Doe</p>
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 dark:text-gray-300">
                        "Great customer service and fast shipping. The binoculars are perfect for my stargazing needs."
                    </p>
                    <p class="mt-4 text-sm font-bold text-gray-900 dark:text-gray-100">- Jane Smith</p>
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 dark:text-gray-300">
                        "Excellent quality and value for money. The star map is very detailed and useful."
                    </p>
                    <p class="mt-4 text-sm font-bold text-gray-900 dark:text-gray-100">- Sam Wilson</p>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="py-6 bg-gray-900 dark:bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <p>&copy; 2024 Your Astronomy Store. All rights reserved.</p>
            <p class="mt-2">
                <a href="{{ route('user.privacy-policy.show') }}" class="text-indigo-400 hover:text-indigo-500">Privacy
                    Policy</a> |
                <a href="{{ route('user.terms-of-service.show') }}" class="text-indigo-400 hover:text-indigo-500">Terms
                    of Service</a>
            </p>
        </div>
    </div>
</x-app-layout>
