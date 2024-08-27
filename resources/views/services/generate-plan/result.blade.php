@extends('layouts.main')
@section('content')
    <div class="w-full">
        <div class="grid grid-cols-3" x-data="{ step: 1 }">
            <div></div>
            <div>
                <div class="border-b-4 border-blue-400 rounded flex justify-between items-center gap-12 py-4 px-4">
                    <h1 class="text-xl font-bold">Generating Plan</h1>
                    <a href="{{ route('system.user.home') }}"
                        class="text-sm  px-4 py-2 rounded shadow hover:bg-blue-400 hover:text-white">Back</a>

                </div>
                <div class="mt-8" x-data="{ current: 0 }" x-show="step == 1">
                    <div class="mb-4">
                        <span class="font-bold">
                            Place: {{ isset($result['place']['name']) ? $result['place']['name'] : $result['place'] }}
                        </span>
                    </div>
                    @foreach ($result['days'] as $key => $row)
                        <div class="border p-8 rounded" x-show="current == {{ $loop->index }}">
                            <div>
                                <h1 class="mb-4 flex gap-4 items-center">
                                    <label for="first_name" class="block mb-2 text-sm font-bold text-gray-900 ">Day</label>
                                    <input type="text" name="day" disabled
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                        value="{{ isset($row['day']['name']) ? $row['day']['name'] : $row['day'] }}" />
                                </h1>
                            </div>

                            <div>
                                <h1 class="mb-4 flex gap-4 items-center">
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-bold text-gray-900 ">Hotel</label>
                                    <input type="text" name="hotel"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                        value="{{ isset($row['hotel']['name']) ? $row['hotel']['name'] : $row['hotel'] }}" />
                                </h1>
                            </div>

                            <div>
                                <h1 class="mb-4 flex gap-4 items-center">
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-bold text-gray-900 ">Restaurant</label>
                                    <input type="text" name="restaurant"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                        value="{{ isset($row['restaurant']['name']) ? $row['restaurant']['name'] : $row['restaurant'] }}" />
                                </h1>
                            </div>

                            <div>
                                <h1 class="mb-4 flex gap-4 items-center">
                                    <label for="first_name" class="block mb-2 text-sm font-bold text-gray-900 ">Tourist
                                        area</label>
                                    <input type="text" name="duration"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                        value="{{ isset($row['tourist_area']['name']) ? $row['tourist_area']['name'] : $row['tourist_area'] }}" />
                                </h1>
                            </div>

                            <div>
                                <h1 class="mb-4 flex gap-4 items-center">
                                    <label for="transportation"
                                        class="block mb-2 text-sm font-bold text-gray-900 ">Transportation</label>
                                    <input type="text" name="transportation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required
                                        value="{{ isset($row['transportation']['name']) ? $row['transportation']['name'] : $row['transportation'] }}" />
                                </h1>
                            </div>

                            <button x-on:click="current--" x-show="current > 0"
                                class="border px-4 py-2 rounded hover:shadow-md hover:text-white hover:bg-blue-400">Previous</button>
                            <button x-on:click="current++" x-show="current < {{ count($result['days']) - 1 }}"
                                class="border px-4 py-2 rounded hover:shadow-md hover:text-white hover:bg-blue-400">Next</button>
                        </div>
                    @endforeach

                    <div class="mt-8" x-show="current == {{ count($result['days']) - 1 }}">
                        <h1 class="text-center font-bold text-lg">if you not satify with the result, Please generate new
                            one.</h1>
                        <div class="flex justify-center gap-4 mt-8">
                            <button href=""
                                class="border px-4 py-2 rounded hover:shadow-md hover:text-white hover:bg-red-400  text-white bg-red-500"
                                onclick="history.back()">Generate
                                New</button>
                            <button x-on:click="step = 2"
                                class="border px-4 py-2 rounded hover:shadow-md hover:text-white hover:bg-blue-400 text-white bg-green-400">I'm
                                satisfy</button>
                        </div>
                    </div>
                </div>

                <div class="mt-8" x-show="step == 2">
                    <h1 class="text-xl font-bold mb-4">Setup Schedule</h1>
                    <x-date-picker />
                    <br>
                    <button x-on:click="step = 3"
                        class="border px-4 py-2 rounded hover:shadow-md hover:text-white hover:bg-blue-400 text-white bg-green-400">Next</button>
                </div>

                <div class="mt-8" x-show="step == 3">
                    <h1 class="text-xl font-bold mb-4">Choose Tour Guide</h1>
                    <div>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                        <div class=" flex justify-between items-center">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Search via name or email" required />
                        </div>
                    </div>
                    <br>
                    <div>
                        <x-card/>

                    </div>

                    <br>
                    <button x-on:click="alert('hi')"
                        class="border px-4 py-2 rounded hover:shadow-md hover:text-white hover:bg-blue-400 text-white bg-green-400">Submit</button>
                </div>


            </div>

            <div></div>
        </div>
    </div>
@endsection
