@extends('layouts.main')

@section('content')
    <header class="sticky top-0 z-10 ">
        <div class=" font-sans w-full m-0">
            <div class="bg-white drop-shadow">
                <div class="px-16 relative">
                    <div class="flex items-center justify-between relative h-[100%]">
                        <div class="">
                            <a href="/">
                                <img src="/Logo.jpg" alt="" class="w-auto h-28" >
                            </a>
                        </div>
                        {{-- <div></div> --}}


                        <div class="hidden sm:flex sm:items-center ">
                            @auth
                            <div x-data="{ isOpen: false, openedWithKeyboard: false }" class="relative" @keydown.esc.window="isOpen = false, openedWithKeyboard = false">
                                <!-- Toggle Button -->
                                <button type="button" @click="isOpen = ! isOpen" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded-md border border-neutral-300 bg-neutral-50 px-4 py-2 text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-800 " aria-haspopup="true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" :class="isOpen || openedWithKeyboard ? 'text-neutral-900 ' : 'text-neutral-600 '" :aria-expanded="isOpen || openedWithKeyboard">
                                    Actions Menu
                                    <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 rotate-0">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                                <!-- Dropdown Menu -->
                                <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-md border border-neutral-300 bg-neutral-50 py-1.5 " role="menu">
                                    <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none " role="menuitem">Dashboard</a>
                                    <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none " role="menuitem">Subscription</a>
                                    <a href="#" class="bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none " role="menuitem">Settings</a>
                                    <form method="post" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit" class="bg-neutral-50 px-4 py-2 w-full text-start
                                        text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-none " role="menuitem" >Sign Out</button>
                                    </form>
                                </div>
                            </div>

                            @else
                            <a href="/login" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign
                                in</a>
                            <a href="/register"
                                class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign
                                up</a>
                            @endauth

                        </div>

                        <div class="sm:hidden cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="block sm:hidden bg-white border-t-2 py-2">
                        <div class="flex flex-col gap-4">
                            <a href="#"
                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Home</a>
                            <a href="#"
                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Services</a>
                            <a href="#"
                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Transportation</a>
                            <a href="#"
                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Feedback</a>
                            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600">About
                                Us</a>
                            <div class="flex justify-between items-center border-t-2 pt-2">
                                @auth

                                @else
                                    <a href="/login"
                                        class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign
                                        in</a>
                                    <a href="/register"
                                        class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign
                                        up</a>
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
