<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Blog Post') }}
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
                            Post Information
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                            Update the details of the blog post.
                        </p>
                    </div>
                    <div class="border-t border-gray-200 dark:border-gray-700 px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <!-- Post Title -->
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Post Title</label>
                                <input type="text" name="title" id="title" value="" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                            </div>

                            <!-- Author -->
                            <div class="col-span-6 sm:col-span-2">
                                <label for="author" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Author</label>
                                <input type="text" name="author" id="author" value="" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                            </div>

                            <!-- Date -->
                            <div class="col-span-6 sm:col-span-2">
                                <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                                <input type="date" name="date" id="date" value="" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
                            </div>

                            <!-- Status -->
                            <div class="col-span-6 sm:col-span-2">
                                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                                <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm sm:text-sm">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>

                            <!-- Content -->
                            <div class="col-span-6">
                                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                                <textarea id="content" name="content" rows="10" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"></textarea>
                            </div>

                            <!-- Post Image -->
                            <div class="col-span-6">
                                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Post Image</label>
                                <input type="file" name="image" id="image" class="mt-1 block w-full text-gray-900 dark:text-gray-200 border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700">
                                {{--                                @if($post->image)--}}
                                {{--                                    <img src="{{ $post->image }}" alt="Post Image" class="mt-2 w-32 h-32 object-cover rounded-lg">--}}
                                {{--                                @endif--}}
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
