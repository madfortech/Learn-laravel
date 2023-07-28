<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
               
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"> 
                        {{ $post->title }} 
                        </div>
                        <p class="text-grey-darker text-base">
                            {{ $post->description }}                        
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        
                        <a href="{{ route('post.edit', ['id' => $post->id]) }}">
                            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                edit
                            </span>
                        </a>

                        <form 
                        method="post"
                        action="{{ route('post.delete', ['id' => $post->id]) }}"
                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            @method('DELETE')
                            <button 
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                delete
                            </button>
                        </form>
                        
                    </div>
                </div>
               
 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
