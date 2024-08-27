@extends('layouts.main')

@section('content')
    <div class="w-full">
        <div class="grid grid-cols-3 mt-10">
            <div></div>
            <div>
                <div class="shadow-lg rounded flex justify-center gap-12 py-4 mx-24">
                    <img src="/angkorwat1.jpg" alt="" class="w-32 rounded">
                    <div class="text-wrap flex flex-col justify-center">
                        <h1 class="text-2xl font-serif font-black text-[#ef4444] text-end block">Welcome to <br/><span class="text-end block">Cambodia!</span></h1>
                        <span class="text-slate-500  text-[0.6rem] text-end block mt-2 ">Explore Your Trip with Us
                            </span>
                    </div>
                </div>

                <div class="mt-10 mx-24 flex justify-between flex-wrap gap-8">
                    <a href="{{ route('system.user.services.generate-plan') }}">
                        <div class="flex flex-col items-center shadow p-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out transform hover:scale-105">
                            <img src="/generate_plans.jpg" alt="" class="rounded w-32 h-24 mb-2" >
                            <h1 class="font-black font-arial">Generating Plan</h1>
                        </div>
                    </a>

                    <div class="flex flex-col items-center shadow p-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out transform hover:scale-105">
                        <img src="/resturant.jpg" alt="" class="rounded w-32 h-24 mb-2" >
                        <h1 class="font-black">Restaurant & Bar</h1>
                    </div>
                    <div class="flex flex-col items-center shadow p-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out transform hover:scale-105">
                        <img src="/tourist_area.jpg" alt="" class="rounded w-32 h-24 mb-2" >
                        <h1 class="font-black">Tourist Area</h1>
                    </div>
                    <div class="flex flex-col items-center shadow p-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out transform hover:scale-105">
                        <img src="/hotel1.png" alt="" class="rounded w-32 h-24 mb-2" >
                        <h1 class="font-black">Hotel & Home Stay</h1>
                    </div>
                    <div class="flex flex-col items-center shadow p-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out transform hover:scale-105">
                        <img src="/resort.jpg" alt="" class="rounded w-32 h-24 mb-2" >
                        <h1 class="font-black">Resort</h1>
                    </div>
                    <div class="flex flex-col items-center shadow p-2 rounded-md cursor-pointer transition-all duration-300 ease-in-out transform hover:scale-105">
                        <img src="/transport.png" alt="" class="rounded w-32 h-24 mb-2" >
                        <h1 class="font-black">Transportation</h1>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
@endsection
