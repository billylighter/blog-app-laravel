<div class="p-6 flex space-x-2 mb-4 bg-white">

    <div class="flex-1">
        <img class="h-auto max-w-full mb-4" src="{{ $post->image }}" alt="{{ $post->title }}">
        <div class="flex justify-between items-center">

            <p class="mt-4 text-lg text-gray-900">
                {{ $post->title }}
            </p>

            <x-dropdown>
                <x-slot name="trigger">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                        </svg>
                    </button>
                </x-slot>
                <x-slot name="content">
                    @if ($post->user->is(auth()->user()))
                        <x-dropdown-link :href="route('posts.edit', $post)">
                            {{ __('Edit') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                            @csrf
                            @method('delete')
                            <x-dropdown-link :href="route('posts.destroy', $post)"
                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Delete') }}
                            </x-dropdown-link>
                        </form>
                    @endif
                        <hr>
                    <x-dropdown-link :href="route('posts.edit', $post)" @class('italic text-red-500')>
                        {{ __('Report this post') }} 🚩
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>

        </div>

        @if($with_content)
            <hr class="my-3">
            <p class="mt-2 text-lg text-gray-900 text-sm">
                {{ $post->content }}
            </p>
        @endif

        <div class="flex justify-between items-end mt-4">
            <div>
                @if(!$with_content)
                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                       href="{{route('posts.show', $post)}}">
                        Read more
                    </a>
                @endif
            </div>
            <div class="text-right">
                <strong class="text-gray-800">{{ $post->user->name }}</strong>
                <br>
                <small class="ml-2 text-sm text-black">{{ $post->created_at->format('j M Y') }}</small>
                <br>
                <small class="ml-2 text-sm text-gray-600">{{ $post->created_at->format('g:i a') }}</small>
                <br>
                @unless ($post->created_at->eq($post->updated_at))
                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                @endunless
            </div>
        </div>

    </div>
</div>
