<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Hero Section -->
            <section class="bg-cover bg-center h-96 rounded-lg shadow-lg overflow-hidden" style="background-image: url('https://via.placeholder.com/1500x600')">
                <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
                    <h1 class="text-4xl lg:text-5xl font-bold text-white text-center">
                        <span class="block">Welcome to</span>
                        <span class="block">Gallifrey</span>
                    </h1>
                </div>
            </section>

            <!-- Introduction Section -->
            <section class="mt-10 bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100 mb-4">About Us</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Gallifrey is dedicated to providing the best service in the industry. Our team of experienced professionals is passionate about delivering innovative solutions and exceeding client expectations.
                </p>
            </section>

            <!-- Mission and Values Section -->
            <section class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Our Mission -->
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Our Mission</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Our mission is to revolutionize the industry with cutting-edge technology, sustainable practices, and a customer-centric approach. We aim to empower our clients with the tools and resources they need to achieve their goals.
                    </p>
                </div>

                <!-- Our Values -->
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Our Values</h3>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-400">
                        <li>Integrity</li>
                        <li>Innovation</li>
                        <li>Customer Focus</li>
                        <li>Teamwork</li>
                        <li>Excellence</li>
                    </ul>
                </div>
            </section>

            <!-- Our Team Section -->
            <section class="mt-10 bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Meet Our Team</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
{{--                    @foreach ($teamMembers as $member)--}}
{{--                        <div class="text-center">--}}
{{--                            <img class="w-24 h-24 rounded-full mx-auto" src="{{ $member['image'] }}" alt="{{ $member['name'] }}">--}}
{{--                            <h4 class="mt-4 text-lg font-medium text-gray-900 dark:text-gray-100">{{ $member['name'] }}</h4>--}}
{{--                            <p class="text-gray-600 dark:text-gray-400">{{ $member['position'] }}</p>--}}
{{--                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $member['bio'] }}</p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>
            </section>

            <!-- Our History Section -->
            <section class="mt-10 bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Our History</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Founded in 2000, our company has a rich history of innovation and growth. We started as a small team with a big vision, and over the years, we've expanded our reach and impact while staying true to our core values.
                </p>
                <ul class="list-disc list-inside mt-4 text-gray-600 dark:text-gray-400">
                    <li>2000: Gallifrey is founded.</li>
                    <li>2005: We launch our first flagship product.</li>
                    <li>2010: We expand internationally.</li>
                    <li>2015: We receive industry recognition for our innovative solutions.</li>
                    <li>2020: We celebrate our 20th anniversary and continue to lead the way in the industry.</li>
                </ul>
            </section>

            <!-- Contact Section -->
            <section class="mt-10 bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 text-center">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Contact Us</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    We'd love to hear from you! Get in touch with us for inquiries, partnerships, or any other information.
                </p>
                <div class="mt-4">
                    <a href="mailto:info@company.com" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg inline-block">
                        Email Us
                    </a>
                </div>
            </section>

        </div>
    </div>
</x-app-layout>
