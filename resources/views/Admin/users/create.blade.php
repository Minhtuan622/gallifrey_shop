<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Create User') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
      <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">
            User Information
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
            Create a new user by filling in the details below.
          </p>
        </div>
        <form method="POST" action="{{ route('admin.users.store') }}" class="px-4 py-5 sm:p-6">
          @csrf
          <div class="grid grid-cols-6 gap-6">
            <!-- User Name -->
            <div class="col-span-6 sm:col-span-4">
              <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-user mr-1"></i> Name
              </label>
              <input type="text" name="name" id="name" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
            </div>

            <!-- Email Address -->
            <div class="col-span-6 sm:col-span-4">
              <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-envelope mr-1"></i> Email
              </label>
              <input type="email" name="email" id="email" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md dark:bg-gray-700 dark:text-gray-200">
            </div>

            <!-- Role -->
            <div class="col-span-6 sm:col-span-2">
              <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-user-tag mr-1"></i> Role
              </label>
              <select id="role" name="role" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm sm:text-sm">
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>

            <!-- Status -->
            <div class="col-span-6 sm:col-span-2">
              <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                <i class="fas fa-toggle-on mr-1"></i> Status
              </label>
              <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-700 dark:text-gray-200 rounded-md shadow-sm sm:text-sm">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse mt-6">
            <button type="submit" class="w-full inline-flex items-center justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 sm:ml-3 sm:w-auto sm:text-sm">
              <i class="fas fa-save mr-1"></i> Save
            </button>
            <a href="{{ route('admin.users.index') }}" class="mt-3 w-full inline-flex items-center justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-900 sm:mt-0 sm:w-auto sm:text-sm">
              <i class="fas fa-times mr-1"></i> Cancel
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>
