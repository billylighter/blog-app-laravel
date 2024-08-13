<x-app-layout>
    <x-slot name="header">
        <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
           href="{{route('posts.index')}}">
            {{ __('Cancel') }}
        </a>
    </x-slot>
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="shadow-sm rounded-lg divide-y">
            <div class="p-6 flex space-x-2 mb-4 bg-white">

                <div class="flex-1">

                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        @method('post')

                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        <textarea
                            name="title"
                            placeholder="{{__('Title')}}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mb-3"
                        >{{ old('title') }}</textarea>

                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        <textarea
                            name="image"
                            placeholder="{{__('Image URL')}}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mb-3"
                        >{{ old('image') }}</textarea>

                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        <textarea
                            name="content"
                            placeholder="{{__('Text for post')}}"
                            rows="4"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >{{ old('content') }}</textarea>

                        <div class="mt-4 space-x-2">
                            <x-primary-button @class('focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800')>{{ __('Update') }}</x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
