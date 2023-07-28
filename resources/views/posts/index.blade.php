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
                @foreach ($posts as $item)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"> 
                            {{ $item->title }} 
                        </div>
                        <p class="text-grey-darker text-base">
                            {{ $item->description }}                        
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        <a href="{{ route('post.show', ['id' => $item->id]) }}">
                            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                                readmore
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach

   
 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
