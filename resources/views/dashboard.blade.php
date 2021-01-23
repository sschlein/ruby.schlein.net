<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($videos->count() < 1)
                <span>Noch keine Videos hochgeladen</span>
            @endif
            @foreach($videos as $video)
                <div class="mb-2">Hochgeladen am {{ $video->created_at->format('d.m.y H:i') }} Uhr von {{ $video->user->name }}</div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-8">
                <div class='embed-container'><iframe src='{{ $video->youtube_url }}?rel=0' frameborder='0' allowfullscreen></iframe></div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
