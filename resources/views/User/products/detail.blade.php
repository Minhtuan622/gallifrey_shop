<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Product Image -->
                    <div>
                        <img src="https://via.placeholder.com/600x400" alt="Product Image"
                             class="w-full h-auto rounded-lg">
                    </div>

                    <!-- Product Info -->
                    <div>
                        <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-gray-100">Telescope XYZ</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-400 mb-4">$499.99</p>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">
                            This high-quality telescope is perfect for astronomy enthusiasts. With its powerful lenses
                            and sturdy design, you'll be able to explore the universe like never before.
                        </p>
                        <button
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg flex items-center">
                            <i class="fas fa-cart-plus mr-2"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-bold mb-4">Product Details</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Specifications -->
                        <div>
                            <h3 class="text-xl font-bold mb-2">Specifications</h3>
                            <ul class="list-disc list-inside space-y-2">
                                <li>
                                    <span class="font-bold">Optical Design:</span> Reflector
                                </li>
                                <li>
                                    <span class="font-bold">Aperture:</span> 203mm (8")
                                </li>
                                <li>
                                    <span class="font-bold">Focal Length:</span> 1200mm (47")
                                </li>
                                <li>
                                    <span class="font-bold">Focal Ratio:</span> f/5.9
                                </li>
                                <li>
                                    <span class="font-bold">Mount Type:</span> Dobsonian
                                </li>
                            </ul>
                        </div>

                        <!-- Description -->
                        <div>
                            <h3 class="text-xl font-bold mb-2">Description</h3>
                            <p>
                                The Telescope XYZ is designed for both amateur and professional astronomers. Its large
                                aperture and advanced optics provide clear and sharp images of celestial objects. The
                                sturdy Dobsonian mount ensures stability and ease of use.
                            </p>
                            <p class="mt-4">
                                Whether you're observing planets, stars, or galaxies, this telescope delivers
                                exceptional performance and value. It comes with all the necessary accessories,
                                including eyepieces, a finderscope, and a detailed user manual.
                            </p>
                        </div>
                    </div>

                    <!-- Additional Images -->
                    <div class="mt-6">
                        <h3 class="text-xl font-bold mb-2">Additional Images</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <img src="https://via.placeholder.com/600x400" alt="Additional Image"
                                 class="w-full h-auto rounded-lg">
                            <img src="https://via.placeholder.com/600x400" alt="Additional Image"
                                 class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Comments</h2>

                <div class="space-y-6">
                    @foreach ($comments as $comment)
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <div class="flex items-center mb-2">
                                <img src="https://via.placeholder.com/40" alt="User Avatar"
                                     class="w-10 h-10 rounded-full mr-3">
                                <div>
                                    <h4 class="text-lg font-bold text-gray-900 dark:text-gray-100">{{ $comment->user->name }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300">{{ $comment->content }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6">
                    <h4 class="text-xl font-bold mb-4 text-gray-900 dark:text-gray-100">Leave a Comment</h4>
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <textarea name="content"
                                  class="w-full px-4 py-2 bg-gray-200 dark:bg-gray-600 border-none rounded-lg text-gray-900 dark:text-gray-100"
                                  rows="4" placeholder="Write your comment..."></textarea>
                        <button type="submit"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg mt-2">
                            Post Comment
                        </button>
                    </form>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Related Products</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($relatedProducts as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
