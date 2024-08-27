@extends('layouts.main')
@section('content')
    <div class="w-full">
        <div class="grid grid-cols-3">
            <div></div>
            <div>
                <div class="border-b-4 border-blue-400 rounded flex justify-between items-center gap-12 py-4 px-4">

                    <h1 class="text-xl font-bold">Generating Plan</h1>
                    <a href="{{ route('system.user.home') }}"
                        class="text-sm  px-4 py-2 rounded shadow hover:bg-blue-400 hover:text-white">Back</a>
                </div>

                <div class="mt-8">
                    <h1 class="text-center text-sm font-bold mb-8">Please fill the information below</h1>
                    <form method="post" action="{{ route('system.user.services.generate-plan.post') }}">
                        @csrf
                        <input type="text" id="gamer" >
                        <div class="border p-8 rounded">
                            <label for="first_name" class="block mb-2 text-sm font-bold text-gray-900">Place</label>
                            <x-select />
                            <br>
                            <label for="member_amount" class="block mb-2 text-sm font-bold text-gray-900 ">Member
                                Amount</label>
                            <input type="number" name="member_amount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="3" required />
                            <br>
                            <label for="first_name" class="block mb-2 text-sm font-bold text-gray-900 ">Budget ($)</label>
                            <input type="number" name="budget"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="30" required />
                            <br>
                            <label for="first_name" class="block mb-2 text-sm font-bold text-gray-900 ">Vacation Duration
                                (day)</label>
                            <input type="number" name="duration"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="2" required />
                            <br>
                            <label for="first_name" class="block mb-2 text-sm font-bold text-gray-900 ">Preferences</label>
                            <div>
                                <div class="flex items-center gap-2">
                                    <input checked name="preferences[]" type="checkbox" value="historical"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                    <label>Historical</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input name="preferences[]" type="checkbox" value="natural"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                    <label>Natural</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input name="preferences[]" type="checkbox" value="adventure"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">
                                    <label>Adventure</label>
                                </div>
                            </div>
                            <div class="mt-8 flex justify-center">
                                <button type="submit"
                                    class="text-sm  px-4 py-2 rounded shadow hover:bg-blue-400 hover:text-white">Generate</button>
                            </div>
                    </form>

                </div>
            </div>

        </div>
        <div></div>
    </div>
    </div>
@endsection
