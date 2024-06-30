<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
                            Post Information
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                            Update the details of the blog post.
                        </p>
                    </div>

                    <div class="border-t border-gray-200 dark:border-gray-700 px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Post Title -->
                            <div>
                                <x-forms.input-label for="title" :value="__('Post Title')"/>
                                <x-forms.text-input
                                    type="text"
                                    id="title"
                                    name="title"
                                    class="block mt-1 w-full"
                                    :value="old('title', $blog->title)"
                                    autocomplete="title"
                                    required
                                />
                                <x-forms.input-error :messages="$errors->get('title')" class="mt-2"/>
                            </div>

                            <!-- Post Image -->
                            <div>
                                <x-forms.input-label for="image" :value="__('Post Image')"/>
                                <div class="mt-1 flex items-center">
                                    <input type="file" name="image" id="image" class="hidden"/>
                                    <label for="image"
                                           class="cursor-pointer bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 text-sm rounded-lg font-medium text-gray-700 dark:text-gray-300 px-3 py-2">
                                        <span>Upload a file</span>
                                        <span class="sr-only">Choose file</span>
                                    </label>
                                    @if($blog->image)
                                        <img
                                            src="{{ asset('storage/' . $blog->image) }}"
                                            alt="Post Image"
                                            class="ml-4 w-24 h-24 object-cover rounded-lg"
                                        >
                                    @endif
                                </div>
                                <x-forms.input-error :messages="$errors->get('image')" class="mt-2"/>
                            </div>

                            <!-- Date and Status -->
                            <div class="md:col-span-2 flex space-x-4">
                                <div class="w-1/2">
                                    <x-forms.input-label for="date" :value="__('Date')"/>
                                    <x-forms.text-input
                                        type="date"
                                        id="date"
                                        name="published_at"
                                        class="block mt-1 w-full"
                                        :value="old('date', $blog->published_at)"
                                        required
                                    />
                                    <x-forms.input-error :messages="$errors->get('date')" class="mt-2"/>
                                </div>

                                <div class="w-1/2">
                                    <x-forms.input-label for="status" :value="__('Status')"/>
                                    <select
                                        id="status"
                                        name="status"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm sm:text-sm"
                                    >
                                        <option value="1" {{ old('status', $blog->status) === 1 ? 'selected' : '' }}>
                                            Draft
                                        </option>
                                        <option value="2" {{ old('status', $blog->status) === 2 ? 'selected' : '' }}>
                                            Published
                                        </option>
                                    </select>
                                    <x-forms.input-error :messages="$errors->get('status')" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="md:col-span-2">
                                <x-forms.input-label for="content" :value="__('Content')"/>
                                <textarea
                                    id="content"
                                    name="content"
                                    rows="10"
                                    class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"
                                    required
                                >{{ old('content', $blog->content) }}</textarea>
                                <x-forms.input-error :messages="$errors->get('content')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end space-x-4">
                    <x-forms.button title="Cancel" kindButton="secondary" class="mt-4" type="button"/>
                    <x-forms.button title="Save" kindButton="primary" class="mt-4"/>
                </div>
            </form>

            <form action="{{ route('admin.blogs.delete', $blog) }}" method="post" class="mt-4">
                @csrf
                @method('delete')
                <x-forms.button title="Delete" kindButton="danger"/>
            </form>
        </div>
    </div>
</x-admin-layout>
