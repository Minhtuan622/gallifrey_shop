<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Total Users</h3>
                    <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">1,234</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Total Sales</h3>
                    <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">$56,789</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">New Orders</h3>
                    <p class="mt-2 text-3xl font-bold text-600 dark:text-indigo-400">123</p>
                </div>
            </div>

            <!-- Charts/Graphs Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sales Overview</h3>
                <!-- Placeholder for Chart -->
                <div id="chart" class="mt-4">
                    <!-- Insert your chart library code here -->
                    <img src="https://via.placeholder.com/800x400" alt="Chart" class="w-full">
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Recent Activity</h3>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-center">
                        <div class="bg-green-500 w-2.5 h-2.5 rounded-full mr-4"></div>
                        <p class="text-gray-700 dark:text-gray-400">User <span class="font-semibold">John Doe</span> made a purchase.</p>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-yellow-500 w-2.5 h-2.5 rounded-full mr-4"></div>
                        <p class="text-gray-700 dark:text-gray-400">New order placed by <span class="font-semibold">Jane Smith</span>.</p>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-red-500 w-2.5 h-2.5 rounded-full mr-4"></div>
                        <p class="text-gray-700 dark:text-gray-400">Order <span class="font-semibold">#12345</span> was cancelled.</p>
                    </li>
                </ul>
            </div>

            <!-- To-Do List/Tasks Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">To-Do List</h3>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-center justify-between">
                        <p class="text-gray-700 dark:text-gray-400">Update website content</p>
                        <button class="text-green-600 dark:text-green-400 hover:underline">Complete</button>
                    </li>
                    <li class="flex items-center justify-between">
                        <p class="text-gray-700 dark:text-gray-400">Review new applications</p>
                        <button class="text-green-600 dark:text-green-400 hover:underline">Complete</button>
                    </li>
                    <li class="flex items-center justify-between">
                        <p class="text-gray-700 dark:text-gray-400">Prepare sales report</p>
                        <button class="text-green-600 dark:text-green-400 hover:underline">Complete</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-admin-layout>

