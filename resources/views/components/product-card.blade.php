@props(['image', 'name', 'price', 'description', 'navigate', 'addToCartAction'])

<div {{ $attributes->merge(['class' => 'flex flex-col bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden']) }}>
    <a href="{{ $navigate ?? '#'}}">
        <img src="{{ $image ?? '#'}}" alt="{{ $name }}" class="w-full h-48 object-cover">
    </a>
    <div class="flex flex-col p-4 flex-grow">
        <h4 class="text-xl font-semibold text-gray-900 dark:text-gray-100">{{ $name }}</h4>
        <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $price }}</p>
        <p class="mt-2 text-gray-700 dark:text-gray-300 flex-grow">{{ $description }}</p>
        <form action="{{ $addToCartAction ?? '#' }}" class="flex items-center justify-center">
            <button
                type="submit"
                class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
            </button>
        </form>
    </div>
</div>

