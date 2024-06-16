<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                            Product Information
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                            Update the details of the product.
                        </p>
                    </div>
                    <div class="border-t border-gray-200 dark:border-gray-700 px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <!-- Product Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Name</label>
                                <input type="text" name="name" id="name" value="" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                            </div>

                            <!-- Price -->
                            <div class="col-span-6 sm:col-span-2">
                                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
                                <input type="text" name="price" id="price" value="" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                            </div>

                            <!-- Stock -->
                            <div class="col-span-6 sm:col-span-2">
                                <label for="stock" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stock</label>
                                <input type="text" name="stock" id="stock" value="" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                            </div>

                            <!-- Status -->
                            <div class="col-span-6 sm:col-span-2">
                                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                                <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm sm:text-sm">
                                    <option value="available">Available
                                    </option>
                                    <option value="out_of_stock">
                                        Out of Stock
                                    </option>
                                    <option value="discontinued">
                                        Discontinued
                                    </option>
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                                <textarea id="description" name="description" rows="4" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"></textarea>
                            </div>

                            <!-- Product Images -->
                            <div class="col-span-6">
                                <label for="images" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Images</label>
                                <input type="file" name="images[]" id="images" multiple class="mt-1 block w-full text-gray-900 dark:text-gray-200 border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700">
                                <div class="mt-2 grid grid-cols-3 gap-4">
{{--                                    @foreach ($product->images as $image)--}}
{{--                                        <img src="{{ $image->url }}" alt="Product Image" class="w-full h-32 object-cover rounded-lg">--}}
{{--                                    @endforeach--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 sm:ml-3 sm:w-auto sm:text-sm">
                        Save
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-900 sm:mt-0 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>

