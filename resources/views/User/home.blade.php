<x-app-layout>

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen"
         style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-24 text-center text-white">
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">Explore the Universe with Our Astronomical Equipment</h1>
            <p class="text-xl lg:text-2xl mb-8">Discover the best telescopes, binoculars, and accessories for stargazing.</p>
            <a href="{{ route('user.products.show') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg text-lg">Shop Now</a>
        </div>
    </div>

    <!-- Featured Products Section -->
    <section class="py-12 bg-gray-100 dark:bg-gray-900" id="featured-products">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100">Featured Products</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Explore our selection of top-rated astronomy equipment.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
{{--                @foreach ($featuredProducts as $product)--}}
{{--                    <x-product-card :product="$product" />--}}
{{--                @endforeach--}}
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12 bg-white dark:bg-gray-800" id="categories">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100">Shop by Category</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Find the perfect equipment for your astronomy needs.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
{{--                @foreach ($categories as $category)--}}
{{--                    <a href="{{ route('user.products.show', ['category' => $category->slug]) }}" class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg text-center hover:bg-gray-300 dark:hover:bg-gray-600 transition duration-200 ease-in-out">--}}
{{--                        <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $category->name }}</h3>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-12 bg-gray-100 dark:bg-gray-900" id="about-us">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">About Us</h2>
            <p class="text-lg lg:text-xl text-gray-700 dark:text-gray-300">
                We are passionate about helping people explore the wonders of the night sky. Our mission is to provide
                the best products and customer service to make your stargazing experience unforgettable.
            </p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-12 bg-white dark:bg-gray-800" id="testimonials">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-8">What Our Customers Say</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
{{--                @foreach ($testimonials as $testimonial)--}}
{{--                    <div class="bg-gray-200 dark:bg-gray-700 p-6 rounded-lg shadow-lg">--}}
{{--                        <p class="text-gray-700 dark:text-gray-300 italic">"{{ $testimonial->content }}"</p>--}}
{{--                        <p class="mt-4 text-sm font-bold text-gray-900 dark:text-gray-100">- {{ $testimonial->author }}</p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-6 bg-gray-900 dark:bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Your Astronomy Store. All rights reserved.</p>
            <p class="mt-2">
                <a href="{{ route('user.privacy-policy.show') }}" class="text-indigo-400 hover:text-indigo-500">Privacy
                    Policy</a> |
                <a href="{{ route('user.terms-of-service.show') }}" class="text-indigo-400 hover:text-indigo-500">Terms
                    of Service</a>
            </p>
        </div>
    </footer>
</x-app-layout>
