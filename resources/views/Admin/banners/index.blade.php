<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Manage Banners') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-4">
          <input
            type="text"
            class="w-full max-w-md px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
            placeholder="Search for banners..."
          />
          <select
            class="px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200">
            <option value="">All Positions</option>
            <option value="top">Top</option>
            <option value="sidebar">Sidebar</option>
          </select>
        </div>
        <a href="{{ route('admin.banners.create') }}"
           class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
          <i class="fas fa-plus mr-2"></i> Add New Banner
        </a>
      </div>

      <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
          <thead class="bg-gray-50 dark:bg-gray-700">
          <tr>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
              ID
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
              Title
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
              Image
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
              Link
            </th>
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
              Position
            </th>
            <th scope="col" class="relative px-6 py-3">
              <span class="sr-only">Actions</span>
            </th>
          </tr>
          </thead>
          <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
          @foreach($banners as $banner)
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-600 transition duration-150 ease-in-out">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                {{ $banner->id }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                {{ $banner->title }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <img src="{{ $banner->image_url }}" alt="{{ $banner->title }}"
                     class="h-12 w-24 rounded-md object-cover">
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                <a href="{{ $banner->link_url }}" target="_blank"
                   class="text-blue-600 dark:text-blue-400 hover:underline">
                  {{ Str::limit($banner->link_url, 20) }}
                </a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                {{ $banner->position }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="{{ route('admin.banners.edit', $banner->id) }}"
                   class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-300 dark:hover:text-indigo-500">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" class="inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                          class="text-red-600 hover:text-red-900 dark:text-red-300 dark:hover:text-red-500"
                          onclick="return confirm('Are you sure you want to delete this banner?')">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-6">
        {{--                {{ $banners->links() }} --}}
      </div>
    </div>
  </div>
</x-admin-layout>
