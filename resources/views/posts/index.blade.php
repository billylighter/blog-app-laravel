<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-start">
            {{ __('Posts') }}
            <a href="{{route('posts.create')}}"
                class="ml-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <strong>+</strong>
                <span>New post</span>
            </a>
        </h2>
    </x-slot>

        <div class="mt-6 shadow-sm rounded-lg divide-y">
            <div class="grid gap-4 md:grid-cols-3">
                @forelse ($posts as $post)
                    <article>
                        @include('posts.post.single')
                    </article>
                @empty
                    <div
                        class="p-5 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-yellow-400 text-center"
                        role="alert">
                        {{__('Your list is empty.')}}
                    </div>
                @endforelse
            </div>
            {{ $posts->links() }}
        </div>

</x-app-layout>
