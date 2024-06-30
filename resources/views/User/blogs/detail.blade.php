<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Blog Post Content -->
            <article class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <header class="px-4 py-5 sm:px-6">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">
                        {{ $blog->title }}
                    </h1>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                        Published on {{ $blog->published_at }} by {{ $blog->author_info->name }}
                    </p>
                </header>
                <img class="w-full h-auto" src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
                <div class="px-4 py-5 sm:px-6">
                    <div class="mt-4 text-gray-900 dark:text-gray-100 prose lg:prose-lg">
                        {!! $blog->content !!}
                    </div>
                </div>
            </article>

            <!-- Comments Section -->
            <section class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    Comments
                </h2>
                <div class="space-y-6">
{{--                    @foreach ($comments as $comment)--}}
{{--                        <div class="flex">--}}
{{--                            <div class="flex-shrink-0 mr-4">--}}
{{--                                <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40"--}}
{{--                                     alt="User avatar">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="text-sm font-medium text-gray-900 dark:text-gray-100">--}}
{{--                                    {{ $comment->user->name }}--}}
{{--                                </div>--}}
{{--                                <div class="text-sm text-gray-500 dark:text-gray-300">--}}
{{--                                    {{ $comment->created_at->diffForHumans() }}--}}
{{--                                </div>--}}
{{--                                <div class="mt-2 text-sm text-gray-700 dark:text-gray-300">--}}
{{--                                    <p>{{ $comment->content }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

                    <!-- Comment Form -->
                    <div class="mt-6">
                        <h4 class="text-xl font-bold mb-4 text-gray-900 dark:text-gray-100">Leave a Comment</h4>
                        <form action="#" method="POST">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <textarea name="content"
                                      class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-gray-200"
                                      rows="3" placeholder="Add a comment..."></textarea>
                            <button type="submit"
                                    class="mt-3 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Related Posts Section -->
            <section class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    Related Posts
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
{{--                    @foreach ($relatedBlogs as $relatedBlog)--}}
{{--                        <article class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                            <a href="{{ route('user.blogs.showDetail', $relatedBlog) }}">--}}
{{--                                <img class="w-full h-48 object-cover" src="{{ $relatedBlog->image_url }}"--}}
{{--                                     alt="{{ $relatedBlog->title }}">--}}
{{--                            </a>--}}
{{--                            <div class="p-4">--}}
{{--                                <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">--}}
{{--                                    <a href="{{ route('user.blogs.showDetail', $relatedBlog) }}" class="hover:underline">--}}
{{--                                        {{ $relatedBlog->title }}--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">--}}
{{--                                    {{ $relatedBlog->published_at->format('F j, Y') }}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    @endforeach--}}
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
