<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Product Detail Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="lg:flex lg:space-x-6">
                        <!-- Product Image -->
                        <div class="lg:w-1/2">
                            <img src="https://via.placeholder.com/600x400" alt="Product Image" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <!-- Product Info -->
                        <div class="lg:w-1/2">
                            <h3 class="text-3xl font-bold mb-4">Telescope XYZ</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-4">$499.99</p>
                            <p class="text-lg mb-4">This high-quality telescope is perfect for astronomy enthusiasts. With its powerful lenses and sturdy design, you'll be able to explore the universe like never before.</p>
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Specifications Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">Specifications</h3>
                    <ul class="space-y-2">
                        <li class="flex justify-between">
                            <span>Optical Design:</span>
                            <span>Reflector</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Aperture:</span>
                            <span>203mm (8")</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Focal Length:</span>
                            <span>1200mm (47")</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Focal Ratio:</span>
                            <span>f/5.9</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Mount Type:</span>
                            <span>Dobsonian</span>
                        </li>
                        <!-- Add more specifications as needed -->
                    </ul>
                </div>
            </div>

            <!-- Additional Images and Detailed Description Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">More About Telescope XYZ</h3>
                    <div class="lg:flex lg:space-x-6">
                        <div class="lg:w-1/2">
                            <img src="https://via.placeholder.com/600x400" alt="Additional Image" class="w-full h-full object-cover rounded-lg mb-4">
                            <img src="https://via.placeholder.com/600x400" alt="Additional Image" class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="lg:w-1/2">
                            <p class="text-lg mb-4">The Telescope XYZ is designed for both amateur and professional astronomers. Its large aperture and advanced optics provide clear and sharp images of celestial objects. The sturdy Dobsonian mount ensures stability and ease of use.</p>
                            <p class="text-lg mb-4">Whether you're observing planets, stars, or galaxies, this telescope delivers exceptional performance and value. It comes with all the necessary accessories, including eyepieces, a finderscope, and a detailed user manual.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">Comments</h3>
                    <div class="space-y-6">
                        <!-- Comment -->
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <div class="flex items-center mb-2">
                                <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full mr-3">
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900 dark:text-gray-100">John Doe</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">2 days ago</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300">This telescope is amazing! The views are crystal clear, and it's easy to set up and use. Highly recommended!</p>
                        </div>
                        <!-- Comment -->
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <div class="flex items-center mb-2">
                                <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full mr-3">
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900 dark:text-gray-100">Jane Smith</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">1 week ago</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300">I love this telescope! The build quality is excellent, and the images are sharp and bright. It's perfect for both beginners and experienced astronomers.</p>
                        </div>
                        <!-- Add more comments as needed -->
                    </div>

                    <!-- Add Comment Form -->
                    <div class="mt-6">
                        <h4 class="text-xl font-bold mb-4">Leave a Comment</h4>
                        <form>
                            <div class="mb-4">
                                <textarea class="w-full px-4 py-2 bg-gray-200 dark:bg-gray-600 border-none rounded-lg text-gray-900 dark:text-gray-100" rows="4" placeholder="Write your comment..."></textarea>
                            </div>
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">Post Comment</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">Related Products</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <x-product-card
                            navigate="{{ route('products.detail') }}"
                            image="https://via.placeholder.com/300"
                            name="Binoculars ABC"
                            price="$249.99"
                            description="Perfect binoculars for stargazing and bird watching."
                        />
                        <x-product-card
                            navigate="{{ route('products.detail') }}"
                            image="https://via.placeholder.com/300"
                            name="Star Map 2024"
                            price="$19.99"
                            description="Detailed star map for tracking constellations."
                        />
                        <x-product-card
                            navigate="{{ route('products.detail') }}"
                            image="https://via.placeholder.com/300"
                            name="Astronomy Book"
                            price="$29.99"
                            description="Comprehensive guide to astronomy."
                        />
                        <!-- Add more related product cards as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
