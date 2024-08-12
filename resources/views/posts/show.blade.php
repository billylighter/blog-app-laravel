<x-app-layout>
    <x-slot name="header">
        <a class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" href="{{route('posts.index')}}">
            {{ __('Back to posts') }}
        </a>
    </x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 shadow-sm rounded-lg divide-y">
            @include('posts.post.single')
        </div>
    </div>
</x-app-layout>
