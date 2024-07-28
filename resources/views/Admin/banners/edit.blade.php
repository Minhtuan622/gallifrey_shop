<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Edit Banner') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
            <i class="fas fa-info-circle mr-2"></i> Banner Information
          </h3>
          <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
            Update the details below to edit the banner.
          </p>
        </div>
        <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 px-4 py-5 sm:p-6">
          @csrf
          @method('PUT')
          <div class="grid grid-cols-6 gap-6">
            <!-- Title -->
            <div class="col-span-6 sm:col-span-4">
              <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-heading mr-1"></i> {{ __('Title') }}
              </label>
              <input
                type="text"
                id="title"
                name="title"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"
                value="{{ old('title', $banner->title) }}"
                required
              />
              @error('title')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <!-- Link URL -->
            <div class="col-span-6 sm:col-span-4">
              <label for="link_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-link mr-1"></i> {{ __('Link URL') }}
              </label>
              <input
                type="text"
                id="link_url"
                name="link_url"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"
                value="{{ old('link_url', $banner->link_url) }}"
                required
              />
              @error('link_url')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <!-- Position -->
            <div class="col-span-6 sm:col-span-2">
              <label for="position" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-map-marker-alt mr-1"></i> {{ __('Position') }}
              </label>
              <input
                type="text"
                id="position"
                name="position"
                class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200"
                value="{{ old('position', $banner->position) }}"
                required
              />
              @error('position')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <!-- Upload Image -->
            <div class="col-span-6 sm:col-span-4">
              <label for="upload_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-upload mr-1"></i> {{ __('Upload Image') }}
              </label>
              <label for="upload_image" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-900 disabled:opacity-25 transition">
                {{ __('Choose File') }}
              </label>
              <input
                type="file"
                id="upload_image"
                name="upload_image"
                accept="image/*"
                class="hidden"
                onchange="previewImage(event)"
              />
              <img
                id="image_preview"
                src="{{ $banner->image_url }}"
                alt="Image Preview"
                class="mt-4 object-cover h-[500px] rounded-md"
              />
              @error('upload_image')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex justify-end mt-6">
            <button
              type="submit"
              class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-900 disabled:opacity-25 transition"
            >
              <i class="fas fa-save mr-1"></i> Save
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function previewImage(event) {
      const input = event.target;
      const reader = new FileReader();

      reader.onload = function () {
        const dataURL = reader.result;
        const imagePreview = document.getElementById('image_preview');
        imagePreview.src = dataURL;
      };

      reader.readAsDataURL(input.files[0]);
    }
  </script>
</x-admin-layout>
