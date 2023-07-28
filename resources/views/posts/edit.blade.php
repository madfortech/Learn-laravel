<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' edit post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex">
                    <form 
                        method="post"
                        action="{{ route('post.update', ['id' => $post->id]) }}"
                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="title">
                                title
                            </label>
                            <input 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight 
                            focus:outline-none focus:shadow-outline" 
                            id="title" 
                            name="title"
                            type="text"
                            value=" {{ $post->title }}">
                        </div>
                        <div class="mb-6">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="description">
                                description
                            </label>
                            <textarea 
                                class="shadow appearance-none border rounded w-full "
                                name="description" id="" cols="30" rows="10">
                                {{ $post->description }}
                            </textarea>
                    
                        </div>
                        <div class="flex items-center justify-between">
                            <button 
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
