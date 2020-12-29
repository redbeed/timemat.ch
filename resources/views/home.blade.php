@extends('layout.main')

@section('content')
    <div class="container my-auto">
        <div class="text-center text-3xl sm:text-5xl md:text-6xl font-bold mb-16 text-indigo-800">
            Timemat<span class="text-indigo-300 font-normal">.</span>ch
        </div>
        <section id="generate-form">
            <div class="bg-white border-2 border-indigo-800 rounded-xl px-8 py-6 max-w-xl m-auto mb-5">
                <div class="text-gray-400 pb-3">Create your own</div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label class="text-gray-580 mb-1">Your Name</label>
                        <input name="userName" type="text" class="border-2 rounded text-lg py-1 px-2 border-indigo-800"
                               placeholder="moVRs">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-580 mb-1">Event Name</label>
                        <input name="eventName" type="text" class="border-2 rounded text-lg py-1 px-2 border-indigo-800"
                               placeholder="Meeting 1337">
                    </div>
                </div>
                <hr class="my-5 border-1 border-gray-200">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label class="text-gray-580 mb-1">Date</label>
                        <input name="date" type="date" class="border-2 rounded text-lg py-1 px-2 border-indigo-800">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-gray-580 mb-1">Time</label>
                        <input name="time" type="time" class="border-2 rounded text-lg py-1 px-2 border-indigo-800">
                    </div>
                </div>
            </div>
            <button type="submit" class="bg-indigo-800 text-white font-bold py-3 px-7 rounded-xl m-auto block">
                Generate <i class="far fa-arrow-alt-circle-right"></i>
            </button>
        </section>
    </div>
@endsection
