<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Edit User') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="container">
        <h1>Edit Banner</h1>
        <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $banner->title }}" required>
          </div>
          <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" value="{{ $banner->image_url }}"
                   required>
          </div>
          <div class="form-group">
            <label for="link_url">Link URL</label>
            <input type="text" name="link_url" id="link_url" class="form-control" value="{{ $banner->link_url }}"
                   required>
          </div>
          <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ $banner->position }}"
                   required>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>
