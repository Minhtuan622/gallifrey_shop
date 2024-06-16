<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Contact Form -->
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">Get in Touch</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Fill out the form below to contact us.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <x-input-label
                                                for="name"
                                                :value="__('Name')"
                                            />
                                            <x-text-input
                                                type="text"
                                                id="name"
                                                name="name"
                                                class="block mt-1 w-full"
                                                :value="old('email')"
                                                autocomplete="given-name"
                                                required
                                            />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <x-input-label
                                                for="email"
                                                :value="__('Email')"
                                            />
                                            <x-text-input
                                                type="email"
                                                id="email"
                                                name="email"
                                                class="block mt-1 w-full"
                                                :value="old('email')"
                                                autocomplete="email"
                                                required
                                            />
                                        </div>
                                        <div class="col-span-6">
                                            <x-input-label
                                                for="subject"
                                                :value="__('Subject')"
                                            />
                                            <x-text-input
                                                type="text"
                                                id="subject"
                                                name="subject"
                                                class="block mt-1 w-full"
                                                :value="old('email')"
                                                autocomplete="given-name"
                                                required
                                            />
                                        </div>
                                        <div class="col-span-6">
                                            <x-input-label
                                                for="message"
                                                :value="__('Message')"
                                            />
                                            <x-text-area
                                                type="text"
                                                id="message"
                                                name="message"
                                                class="block mt-1 w-full"
                                                rows="4"
                                                :value="old('email')"
                                                autocomplete="given-name"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 dark:bg-gray-900 text-right sm:px-6">
                                    <x-primary-button type="submit" class="ms-3">
                                        {{ __('Send') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">Additional
                                Information</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                You can also reach us at:
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6">
                                <div class="text-gray-900 dark:text-gray-100">
                                    <p><strong>Address:</strong> 123 Main St, Anytown, USA</p>
                                    <p><strong>Phone:</strong> (123) 456-7890</p>
                                    <p><strong>Email:</strong> contact@company.com</p>
                                </div>
                                <!-- Optional: Map -->
                                <div class="mt-6">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345094316!2d144.95373531550463!3d-37.816279742021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577c7ba1a6eafa0!2sVictoria%20State%20Library!5e0!3m2!1sen!2sau!4v1635510218265!5m2!1sen!2sau"
                                        width="100%" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
