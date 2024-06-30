<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Total Users</h3>
                        <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">1,234</p>
                    </div>
                    <i class="fas fa-users text-4xl text-gray-400"></i>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Total Sales</h3>
                        <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">$56,789</p>
                    </div>
                    <i class="fas fa-chart-line text-4xl text-gray-400"></i>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">New Orders</h3>
                        <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">123</p>
                    </div>
                    <i class="fas fa-shopping-cart text-4xl text-gray-400"></i>
                </div>
                <!-- Thêm một card cho trực quan (ví dụ: Total Products) -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Total Products</h3>
                        <p class="mt-2 text-3xl font-bold text-indigo-600 dark:text-indigo-400">500</p>
                    </div>
                    <i class="fas fa-box text-4xl text-gray-400"></i>
                </div>
            </div>

            <!-- Charts/Graphs and Recent Activity Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Sales Overview Chart -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Sales Overview</h3>
                    <div id="chart" class="mt-4">
                        <!-- Insert your chart library code here -->
                        <img src="https://via.placeholder.com/800x400" alt="Chart" class="w-full rounded-lg">
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Recent Activity</h3>
                    <ul class="mt-4 space-y-4">
                        <li class="flex items-start">
                            <div class="bg-green-500 w-2.5 h-2.5 rounded-full mr-4 mt-1"></div>
                            <p class="text-gray-700 dark:text-gray-400">User <span class="font-semibold">John Doe</span> made a purchase.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-yellow-500 w-2.5 h-2.5 rounded-full mr-4 mt-1"></div>
                            <p class="text-gray-700 dark:text-gray-400">New order placed by <span class="font-semibold">Jane Smith</span>.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-red-500 w-2.5 h-2.5 rounded-full mr-4 mt-1"></div>
                            <p class="text-gray-700 dark:text-gray-400">Order <span class="font-semibold">#12345</span> was cancelled.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- To-Do List/Tasks Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">To-Do List</h3>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-center justify-between">
                        <p class="text-gray-700 dark:text-gray-400">Update website content</p>
                        <button class="px-4 py-2 rounded-md bg-green-600 text-white text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Complete
                        </button>
                    </li>
                    <li class="flex items-center justify-between">
                        <p class="text-gray-700 dark:text-gray-400">Review new applications</p>
                        <button class="px-4 py-2 rounded-md bg-green-600 text-white text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Complete
                        </button>
                    </li>
                    <li class="flex items-center justify-between">
                        <p class="text-gray-700 dark:text-gray-400">Prepare sales report</p>
                        <button class="px-4 py-2 rounded-md bg-green-600 text-white text-sm font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Complete
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-admin-layout>
