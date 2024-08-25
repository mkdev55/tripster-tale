@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8 shadow-md rounded-t p-0">
                <div class="card border-0">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('Welcome to Tripster Tale') }} --}}
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="open-menu.png" alt=""
                                    class="w-12 h-12 cursor-pointer shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out hover:ring-4 hover:ring-gray-400 hover:ring-offset-2 hover:ring-offset-gray-100">
                            </div>
                            <div class="">
                                <h1 class="text-2xl font-bold inline-block ">
                                    Tripster Tale
                                </h1>
                            </div>
                            <div>
                                <img class="w-12 h-12 rounded-full cursor-pointer shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out hover:ring-4 hover:ring-gray-400 hover:ring-offset-2 hover:ring-offset-gray-100"
                                    src="https://i.etsystatic.com/25826190/r/il/28fa19/2919108005/il_1140xN.2919108005_8few.jpg"
                                    alt="Rounded avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 shadow-lg rounded-b">
                <div class="card-body bg-[#f1f5f9] border-t mt-8">

                    <div>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Search Mockups, Logos..." required />
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
