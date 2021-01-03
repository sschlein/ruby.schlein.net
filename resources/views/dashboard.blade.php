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
                <div class="mb-2">Hochgeladen am {{ $video->created_at->format('m.d.y H:i') }} Uhr von {{ $video->user->name }}</div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-8">
                <div class='embed-container'><iframe src='{{ $video->youtube_url }}' frameborder='0' allowfullscreen></iframe></div>
            </div>
            @endforeach
            <!--
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/678MCqnECl0' frameborder='0' allowfullscreen></iframe></div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/aShS24L34sg' frameborder='0' allowfullscreen></iframe></div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/bsryqFgAXPY' frameborder='0' allowfullscreen></iframe></div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/mebqibHt170' frameborder='0' allowfullscreen></iframe></div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/TFVTIRyOlaw' frameborder='0' allowfullscreen></iframe></div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <div class='embed-container'><iframe src='https://www.youtube.com/embed/qaj1-c9XNWg' frameborder='0' allowfullscreen></iframe></div>
            </div>
            -->
        </div>
    </div>
</x-app-layout>
