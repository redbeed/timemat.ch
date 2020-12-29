@extends('layout.main')

@section('content')
    <div class="container my-auto mb-10">
        <div class="text-center text-2xl sm:text-3xl md:text-4xl font-bold mb-16 text-indigo-800">
            Timemat<span class="text-indigo-300 font-normal">.</span>ch
        </div>
        @if($eventName)
            <h1 class="text-center text-3xl sm:text-5xl md:text-6xl font-bold mb-10 break-all">
                {{ ucfirst($eventName) }}
                @if($eventOwner)
                    <span
                        class="text-2xl sm:text-3xl md:text-4xl text-gray-600 block">by {{ ucfirst($eventOwner)}}</span>
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
                <div class="text-2xl sm:text-4xl text-indigo-800 font-bold" data-date>
                    {{ $timeString }}
                </div>
                <div class="text-gray-400" data-timezone>Berlin</div>
            </div>
        </div>
    </div>
@endsection
