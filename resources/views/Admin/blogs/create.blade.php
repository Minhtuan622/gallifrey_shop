<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Create New Blog Post') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
              Post Information
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
              Create a new blog post.
            </p>
          </div>

          <div class="border-t border-gray-200 dark:border-gray-700 px-4 py-5 sm:p-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <div class="col-span-2">
                <x-forms.input-label for="title" :value="__('Post Title')" />
                <x-forms.text-input
                  type="text"
                  id="title"
                  name="title"
                  class="block mt-1 w-full"
                  :value="old('title')"
                  required
                  autofocus
                />
                <x-forms.input-error :messages="$errors->get('title')" class="mt-2" />
              </div>

              <div class="col-span-2">
                <x-forms.input-label for="image" :value="__('Post Image')" />
                <div class="mt-1 flex items-center">
                  <input type="file" name="image" id="image" class="hidden" accept="image/*" onchange="previewImage(event)" />
                  <label for="image" class="cursor-pointer bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 text-sm rounded-lg font-medium text-gray-700 dark:text-gray-300 px-4 py-2 border border-gray-300 dark:border-gray-600">
                    <span>Upload a file</span>
                  </label>
                  <img id="image-preview" src="#" alt="Preview" class="hidden ml-4 h-[500px] object-cover rounded-md" />
                </div>
                <x-forms.input-error :messages="$errors->get('image')" class="mt-2" />
              </div>

              <div>
                <x-forms.input-label for="published_at" :value="__('Publication Date')" />
                <x-forms.text-input
                  type="date"
                  id="published_at"
                  name="published_at"
                  class="block mt-1 w-full"
                  :value="old('published_at', date('Y-m-d'))"
                  required
                />
                <x-forms.input-error :messages="$errors->get('published_at')" class="mt-2" />
              </div>

              <div>
                <x-forms.input-label for="status" :value="__('Status')" />
                <select
                  id="status"
                  name="status"
                  class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md dark:bg-gray-700 dark:text-gray-200"
                  required
                >
                  <option value="1">Draft</option>
                  <option value="2">Published</option>
                </select>
                <x-forms.input-error :messages="$errors->get('status')" class="mt-2" />
              </div>

              <div class="col-span-2">
                <x-forms.input-label for="content" :value="__('Content')" />
                <textarea
                  id="content"
                  name="content"
                  rows="10"
                  class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200 focus:ring-indigo-500 focus:border-indigo-500"
                  required
                >{{ old('content') }}</textarea>
                <x-forms.input-error :messages="$errors->get('content')" class="mt-2" />
              </div>
            </div>
          </div>
        </div>

        <div class="flex justify-end space-x-4">
          <x-forms.button type="button" title="Cancel" kindButton="secondary" onclick="window.history.back()" />
          <x-forms.button type="submit" title="Create Post" kindButton="primary" />
        </div>
      </form>
    </div>
  </div>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function(){
        const output = document.getElementById('image-preview');
        output.src = reader.result;
        output.classList.remove('hidden');
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</x-admin-layout>
