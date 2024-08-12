<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 shadow-sm rounded-lg divide-y">
            @forelse ($posts as $post)
                @include('posts.post.single')
            @empty
                <div class="p-5 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-yellow-400 text-center" role="alert">
                    {{__('Your list is empty.')}}
                </div>
            @endforelse
                {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
