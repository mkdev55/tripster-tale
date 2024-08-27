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
                <div class="mt-8" x-data="{ current: 0 }">

                </div>

            </div>

            <div></div>
        </div>
    </div>
@endsection
