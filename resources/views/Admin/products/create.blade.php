<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="POST" action="{{ route('admin.products.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                            Product Information
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                            Create new product.
                        </p>
                    </div>
                    <div class="border-t border-gray-200 dark:border-gray-700 px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <!-- Product Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <x-forms.input-label
                                    for="name"
                                    :value="__('Name')"
                                />
                                <x-forms.text-input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="block mt-1 w-full"
                                    :value="old('name')"
                                    autocomplete="name"
                                    required
                                />
                                <x-forms.input-error
                                    :messages="$errors->get('price')"
                                    class="mt-2"
                                />
                            </div>

                            <!-- Price -->
                            <div class="col-span-6 sm:col-span-2">
                                <x-forms.input-label
                                    for="price"
                                    :value="__('Price')"
                                />
                                <x-forms.text-input
                                    type="text"
                                    id="price"
                                    name="price"
                                    class="block mt-1 w-full"
                                    :value="old('price')"
                                    autocomplete="price"
                                    required
                                />
                                <x-forms.input-error
                                    :messages="$errors->get('price')"
                                    class="mt-2"
                                />
                            </div>

                            <!-- Stock -->
                            <div class="col-span-6 sm:col-span-2">
                                <x-forms.input-label
                                    for="stock"
                                    :value="__('Stock')"
                                />
                                <x-forms.text-input
                                    type="text"
                                    id="stock"
                                    name="stock"
                                    class="block mt-1 w-full"
                                    :value="old('stock')"
                                    autocomplete="stock"
                                    required
                                />
                                <x-forms.input-error
                                    :messages="$errors->get('price')"
                                    class="mt-2"
                                />
                            </div>

                            <!-- Status -->
                            <div class="col-span-6 sm:col-span-2">
                                <label
                                    for="status"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Status
                                </label>
                                <select
                                    id="status"
                                    name="status"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm sm:text-sm"
                                >
                                    <option value="1">
                                        Available
                                    </option>
                                    <option value="2">
                                        Out of Stock
                                    </option>
                                    <option value="3">
                                        Discontinued
                                    </option>
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="col-span-6">
                                <label
                                    for="description"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                                >
                                    Description
                                </label>
                                <textarea
                                    id="description"
                                    name="description"
                                    rows="4"
                                    class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                                </textarea>
                            </div>

                            <!-- Product Images -->
                            <div class="col-span-6">
                                <label for="images" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product
                                    Images</label>
                                <input type="file" name="images[]" id="images" multiple
                                       class="mt-1 block w-full text-gray-900 dark:text-gray-200 border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700">
                                <div class="mt-2 grid grid-cols-3 gap-4">
                                    {{--                                    @foreach ($product->image as $image)--}}
                                    {{--                                        <img src="{{ $image->url }}" alt="Product Image" class="w-full h-32 object-cover rounded-lg">--}}
                                    {{--                                    @endforeach--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <x-forms.button title="Save" kindButton="primary" class="mx-3" />
                    <x-forms.button title="Cancel" kindButton="secondary" class="mx-3" type="button" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>

