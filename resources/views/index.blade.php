<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Eyden Creative</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('images/letter-t.png') }}">
</head>

<body>
    <div class="bg-white md:container md:mx-auto">
        {{-- navbar --}}
        <header class="absolute inset-x-0 top-0 z-50" x-data="{ open: false }">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ route('landing') }}" class="-m-1.5 p-1.5">
                        <img class="h-10 w-auto inline " src="{{ asset('images/letter-t.png') }}" alt="icon letter T">
                        <span class="font-semibold text-2xl">ravel</span>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                        @click="open = !open">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12 justify-end">
                    <a href="#"
                        class="{{ Request::is('/') ? 'text-amber-500 border-b-2 border-amber-500' : false }} text-sm font-semibold leading-6 text-gray-900 active">Home</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:">Our Tours</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Reviews</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-gray-900 border-2 px-2 border-black border-solid rounded-full">Contact
                        Us</a>
                    <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900 ">Login</a>
                </div>

            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <img class="h-10 w-auto inline " src="{{ asset('images/letter-t.png') }}" alt="icon letter T">
                        <span class="font-semibold text-2xl">ravel</span>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = ! open">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class=" divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="{{ Request::is('/') ? 'text-amber-500 border-b-2 border-amber-500' : false }} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 ">Home</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Our
                                    Tours</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Reviews</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 border-2 border-black">Contact
                                    Us</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- hero section --}}
        <section class="relative isolate px-6  mt-20 lg:px-8 md:mt-20">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2  lg:gap-x-16">
                    <div class="mx-auto max-w-2xl  lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
                        <p class="text-gray-400">
                            {{ $content[0]->title4 ? $content[0]->title4 : 'The vacation you deserve is closer than you think 😍' }}
                        </p>
                        <div class="flex">
                            <h2 class="text-4xl font-bold ">
                                {{ $content[0]->title1 ? $content[0]->title1 : 'Life is short' }}</h2>
                            <span>
                                <img src="{{ asset('images/asset-camera.png') }}" alt="icon camera"
                                    class="w-20 h-8 object-cover ">
                            </span>
                        </div>
                        <h2 class="text-4xl font-bold ">
                            {{ $content[0]->title2 ? $content[0]->title2 : 'and the world 🌍' }} <br>
                            {{ $content[0]->title3 ? $content[0]->title3 : 'is Wide! 🏝️' }}
                        </h2>

                        {{-- form search --}}
                        <form class="lg:mt-12 md:mt-8 mt-10 lg:w-4/6 lg:absolute z-20">
                            <div
                                class="bg-white md:py-4 md:px-8 py-10 px-14 flex flex-wrap justify-between shadow-xl rounded-full space-x-2  ">

                                {{-- location --}}
                                <div class="flex md:justify-between items-center w-full md:w-auto lg:mx-4 ">
                                    <label for="date">
                                        <div class="flex-none w-10">
                                            <img src="{{ asset('icons/icon-location.png') }}" alt="icon pin location"
                                                class="w-8">
                                        </div>
                                    </label>
                                    <div class="w-full md:w-auto">
                                        <label for="location">Location</label>
                                        <select name="location" id="location"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2">
                                            <option>Canada</option>
                                            <option>United States</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex md:justify-between items-center w-full md:w-auto lg:mx-4 ">
                                    <label for="date">
                                        <div class="flex-none w-10">
                                            <img src="{{ asset('icons/icon-calendar.png') }}" alt="icon pin location"
                                                class="w-8">
                                        </div>
                                    </label>
                                    <div class="w-full md:w-auto">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" id="date"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2 ">
                                    </div>
                                </div>
                                {{-- return --}}
                                <div class="flex md:justify-between items-center w-full md:w-auto">
                                    <label for="return">
                                        <div class="flex-none w-10">
                                            <img src="{{ asset('icons/icon-calendar.png') }}" alt="icon pin location"
                                                class="w-8">
                                        </div>
                                    </label>
                                    <div class="w-full md:w-auto">
                                        <label for="return">Return</label>
                                        <input type="date" name="return" id="return"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-2">
                                    </div>
                                </div>
                                <div class="flex justify-end ml-10 md:ml-4 items-center w-full md:w-auto mt-2">
                                    <button
                                        class="p-2  md:rounded-full rounded-2xl bg-amber-500 flex items-center space-x-2">
                                        <span class="md:hidden text-white">Search</span>
                                        <img src="{{ asset('icons/icon-search.png') }}" alt="icon search"
                                            class="w-6">
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>

                    {{--  image hero --}}
                    <div class="flex justify-center ">
                        <div class="overflow-hidden  z-10">
                            <img class="inline-block w-16 h-auto rounded-full ring-2 ring-white absolute z-20 ml-4 mt-20 bg-purple-50 p-2"
                                src="{{ $content[0]->asset1 ? 'storage/' . $content[0]->asset1 : asset('images/helicopter.png') }}"
                                alt="image helicopter">
                            <img class="inline-block w-16 h-auto rounded-full ring-2 ring-white absolute z-20 ml-60 mt-20 bg-purple-100 p-2"
                                src="{{ $content[0]->asset2 ? 'storage/' . $content[0]->asset2 : asset('images/gunung.png') }}">

                            <img src="{{ asset('images/asset-location.png') }}" alt="icon location"
                                class="h-20 z-40 ml-60 object-cover absolute ">



                            <img class="inline-block w-16 h-auto rounded-full ring-2 ring-white absolute z-20 ml-60 mt-64 bg-white p-2"
                                src="{{ $content[0]->asset3 ? 'storage/' . $content[0]->asset3 : asset('images/perahu.png') }}">
                            <img class="ml-10 w-60 h-96 object-cover rounded-full border-4 border-white max-w-full "
                                src="{{ $content[0]->hero1 ? 'storage/' . $content[0]->hero1 : asset('images/hero-1.jpg') }}"
                                alt="hero satu">
                        </div>


                        <div class="overflow-hidden absolute">

                            <img class="w-52 h-72 object-cover rounded-full  max-w-full  ml-64 mt-40"
                                src="{{ $content[0]->hero2 ? 'storage/' . $content[0]->hero2 : asset('images/hero-2.jpg') }}">

                        </div>

                    </div>
                </div>
            </div>

            {{-- services --}}
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-16  pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                @foreach ($services as $service)
                    <div class="flex max-w-xl flex-col items-start ">
                        @if (Str::startsWith($service->image, 'assets/'))
                            <img src="{{ 'storage/' . $service->image }}" alt="image bola dunia"
                                class="w-16 {{ $loop->index == 2 ? 'lg:mt-16' : '' }}">
                        @else
                            <p class="font-bold text-lg text-amber-500">{{ $service->image }}</p>
                        @endif
                        <p class="text-4xl font-bold my-4">{{ $service->title }}</p>
                        <p class="text-gray-500 text-sm">{{ $service->description }}</p>
                    </div>
                @endforeach

            </div>
        </section>


    </div>



</body>

</html>
