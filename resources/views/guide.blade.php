@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    @foreach($tricks as $trick)
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white py-16 sm:py-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                <div class="relative sm:py-16 lg:py-0">
                    <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                        <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                        <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                        </svg>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                        <!-- Testimonial card-->
                        <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                            <img class="absolute inset-0 h-full w-full object-cover" src="/{{ $trick->image_url }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                    <!-- Content area -->
                    <div class="pt-12 sm:pt-16 lg:pt-20">
                        <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
                            {{ $trick->name }}
                        </h2>
                        <div class="mt-6 text-gray-500 space-y-6">
                            <p class="text-lg">
                                {{ $trick->notes }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if($tricks->count() > 1)
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $tricks }}
        </div>
    @endif
@endsection
