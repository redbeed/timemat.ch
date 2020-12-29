@extends('layout.main')

@section('content')
    <div class="flex h-full">
        <div class="container my-auto">
            @if($eventName)
                <h1 class="text-center text-6xl font-bold mb-10">
                    {{ ucfirst($eventName) }}
                    @if($eventOwner)
                        <span class="text-4xl text-gray-600 block">by {{ ucfirst($eventOwner)}}</span>
                    @endif
                </h1>
            @endif
            <div class="bg-white rounded-xl px-8 py-4 max-w-xl m-auto mb-5">
                <div class="text-gray-400 pb-1">Original Time{{ $eventOwner ? ' by '.ucfirst($eventOwner) : '' }}</div>
                <div data-original-time="{{$timeString}}" data-original-timezone="{{ $timezoneString }}">
                    <div class="text-xl text-gray-600 font-medium" data-date>
                        {{ $timeString }}
                    </div>
                    <div class="text-gray-400">
                        {{ $timezoneString }}
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-indigo-800 rounded-xl px-8 py-6 max-w-xl m-auto mb-5">
                <div class="text-gray-400 pb-3">Your Local Time</div>
                <div data-local-time>
                    <div class="text-4xl text-indigo-800 font-bold" data-date>
                        {{ $timeString }}
                    </div>
                    <div class="text-gray-400" data-timezone>Berlin</div>
                </div>
            </div>
            <a href="https://github.com/redbeed/timemat.ch" class="flex items-center text-gray-600 justify-center">
                <i class="fab fa-github fa-2x mr-3"></i> Found a Bug?
            </a>
            <a href="https://redbeed.com/imprint" target="_blank"
               class="flex items-center mt-7 text-xs text-gray-600 justify-center">
                Made with <i class="far fa-heart mx-2 text-red-500"></i> | Impressum
            </a>
        </div>
    </div>
@endsection
