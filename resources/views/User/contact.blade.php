<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <section class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-6 text-center">
                    Get in Touch
                </h2>

                <p class="text-lg text-gray-600 dark:text-gray-400 text-center mb-8">
                    We'd love to hear from you! Whether you have a question, a suggestion, or just want to say hello, please don't hesitate to reach out.
                </p>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Contact Form -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">Send us a Message</h3>
                        <form action="#" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input type="text" id="name" name="name" class="block mt-1 w-full" :value="old('name')" autocomplete="given-name" required />
                                </div>
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input type="email" id="email" name="email" class="block mt-1 w-full" :value="old('email')" autocomplete="email" required />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-input-label for="subject" :value="__('Subject')" />
                                <x-text-input type="text" id="subject" name="subject" class="block mt-1 w-full" :value="old('subject')" autocomplete="off" required />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="message" :value="__('Message')" />
                                <x-text-area id="message" name="message" class="block mt-1 w-full" rows="4" required>{{ old('message') }}</x-text-area>
                            </div>
                            <div class="mt-6">
                                <x-primary-button type="submit">
                                    {{ __('Send') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">Contact Information</h3>
                        <ul class="text-gray-600 dark:text-gray-400 space-y-4">
                            <li>
                                <i class="fas fa-map-marker-alt mr-2 text-indigo-500"></i>
                                123 Main Street, Anytown, USA
                            </li>
                            <li>
                                <i class="fas fa-phone-alt mr-2 text-indigo-500"></i>
                                (123) 456-7890
                            </li>
                            <li>
                                <i class="fas fa-envelope mr-2 text-indigo-500"></i>
                                contact@company.com
                            </li>
                            <li>
                                <i class="fas fa-globe mr-2 text-indigo-500"></i>
                                www.company.com
                            </li>
                        </ul>

                        <!-- Social Media Links -->
                        <div class="mt-6 flex space-x-4 justify-center">
                            <a href="#" class="text-gray-500 hover:text-indigo-500">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-indigo-500">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-indigo-500">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-indigo-500">
                                <i class="fab fa-linkedin-in fa-lg"></i>
                            </a>
                        </div>

                        <!-- Optional: Map -->
                        <div class="mt-8">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345094316!2d144.95373531550463!3d-37.816279742021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577c7ba1a6eafa0!2sVictoria%20State%20Library!5e0!3m2!1sen!2sau!4v1635510218265!5m2!1sen!2sau" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
