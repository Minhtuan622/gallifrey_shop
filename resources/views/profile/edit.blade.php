<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-100 to-purple-100 dark:from-blue-900 dark:to-purple-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

                {{-- Cột chính: Chiếm 2/3 diện tích trên màn hình lớn --}}
                <div class="lg:col-span-8 space-y-6">
                    @include('profile.partials.update-profile-information-form')
                    @include('profile.partials.update-password-form')
                </div>

                {{-- Cột phụ: Chiếm 1/3 diện tích trên màn hình lớn --}}
                <div class="lg:col-span-4 space-y-6">
                    @include('profile.partials.delete-user-form')
                    {{-- Các tính năng mở rộng trong tương lai có thể thêm ở đây --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
