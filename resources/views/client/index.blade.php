@extends('layouts.guest')
@section('content')
<!-- Slider -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "isAutoPlay": true
  }' class="relative">
    <div class="hs-carousel relative overflow-hidden w-full min-h-[350px] bg-white rounded-lg">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-100 p-6">
                    <span class="self-center text-4xl transition duration-700">First slide</span>
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-200 p-6">
                    <span class="self-center text-4xl transition duration-700">Second slide</span>
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-300 p-6">
                    <span class="self-center text-4xl transition duration-700">Third slide</span>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/[.1]">
        <span class="text-2xl" aria-hidden="true">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
        </span>
        <span class="sr-only">Previous</span>
    </button>
    <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/[.1]">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </span>
    </button>

    <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
        <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
    </div>
</div>
<!-- End Slider -->
<!-- Announcement Banner -->
<div class="bg-gradient-to-r from-carrot-600 to-carrot-400">
    <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2">
            <div class="text-center md:text-start md:order-2 md:flex md:justify-end md:items-center">
                <a class="text-3xl py-2 px-3 inline-flex items-center gap-x-2 font-semibold rounded-lg border-2 border-white text-white hover:border-white/70 hover:text-white/70 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Umów wizytę
                    <svg class="flex-shrink-0 w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </div>
            <!-- End Col -->

            <div class="flex flex-col items-center text-start">
                <p class="w-full py-2 px-3 inline-flex justify-start items-center gap-2 font-medium text-white text-2xl">
                    Umów się już dziś na wizytę w Auto Lampy
                </p>
                <p class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 font-medium text-white">
                    Skorzystaj z wygodne formularza online i umów się na wizytę w naszym warsztacie! Dzięki rejestracji online unikniesz czekania w kolejkach.
                </p>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
</div>
<!-- End Announcement Banner -->
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20 my-16">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">

        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200">
                        Jakie usługi oferujemy w Sosnowcu?
                    </h2>
                    <p class="text-gray-500">
                        W Auto Gamma zajmujemy się głównie wykonywaniem napraw lamp samochodowych oraz ich modyfikowaniem. Nasi specjaliści pozjadają odpowiednie doświadczenie oraz wiedzę, aby zająć się odnową twoich reflektorów oraz ich modyfikacją. Na rynku nasza firma działa już od ponad 20 lat. Przez ten cały czas wykonaliśmy pomyślnie tysiące zleceń dla naszych klientów. Aby jednak nie stać w miejscu, inwestujemy w nowe technologie, czego efektem jest coraz bogatsza oferta naszych usług. Oprócz tego, że w Auto Gamma zajmujemy się regeneracją oraz przerabianiem lamp samochodowych, to również od pewnego czasu wykonujemy usługi związane z naprawą szyb, usuwaniem wgnieceń oraz zabezpieczaniem za pomocą foli samochodowej. Nasi klienci mogą wiec liczyć na to, że kompleksowo zajmiemy się przywróceniem ich samochodu do dobrze wyglądającego stanu wizualnego. Zajmujemy się również przystosowywaniem oświetlenia samochodowego pojazdów sprowadzonych do wymogów prawnych, jakie stawia Unia Europejska. Posiadamy wiele serwisów w całej Polsce, a efekty naszej pracy sprawiają, że od nasza firma jest liderem w branży prac związanych z oświetleniem samochodowym.
                    </p>
                </div>
                <!-- End Title -->
            </div>
        </div>
        <!-- End Col -->
        <div class="mt-4 md:mt-0">
            <img class="rounded-xl" src="{{asset('photo/bmw.jpg')}}" alt="Image Description">
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
<!-- Announcement Banner -->
<div class="bg-gradient-to-r from-carrot-600 to-carrot-400">
    <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-3 gap-2">
            <div class="space-y-2">
                <img class="w-full sm:w-40 h-40 object-cover" src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Image Description">
                <img class="w-full sm:w-40 h-40 object-cover" src="https://images.unsplash.com/photo-1668906093328-99601a1aa584?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=986&q=80" alt="Image Description">
            </div>
            <div class="space-y-2">
                <img class="w-full sm:w-40 h-40 object-cover" src="https://images.unsplash.com/photo-1668584054131-d5721c515211?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80" alt="Image Description">
                <img class="w-full sm:w-40 h-40 object-cover" src="https://images.unsplash.com/photo-1664574654529-b60630f33fdb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="Image Description">
            </div>
            <div class="space-y-2">
                <img class="w-full sm:w-40 h-40 object-cover" src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Image Description">
                <img class="w-full sm:w-40 h-40 object-cover" src="https://images.unsplash.com/photo-1586232702178-f044c5f4d4b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80" alt="Image Description">
            </div>
        </div>
        <!-- End Grid -->
    </div>
</div>
<!-- End Announcement Banner -->
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">

        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200">
                        Uprzejmie proszę przesyłać reflektory do regeneracji na adres:
                    </h2>
                    <p class="text-gray-500">
                    <div>Auto Gamma</div>
                    <div>Stefana Banacha 11</div>
                    <div>41-219 Sosnowiec</div>
                    <div>tel. 791 066 550</div>
                    </p>
                    <h3>Do przesyłki proszę <span class="font-bold">włożyć kartkę</span> z:</h3>
                </div>
                <!-- End Title -->

                <!-- List -->
                <ul role="list" class="space-y-2 sm:space-y-4">
                    <li class="flex space-x-3">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 dark:bg-carrot-800/30 dark:text-carrot-500">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>

                        <span class="text-sm sm:text-base text-gray-500">
                            adres zwrotny
                        </span>
                    </li>

                    <li class="flex space-x-3">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 dark:bg-carrot-800/30 dark:text-carrot-500">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>

                        <span class="text-sm sm:text-base text-gray-500">
                            nr kontaktowy
                        </span>
                    </li>

                    <li class="flex space-x-3">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 dark:bg-carrot-800/30 dark:text-carrot-500">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>

                        <span class="text-sm sm:text-base text-gray-500">
                            wstępnie ustaloną ceną
                        </span>
                    </li>
                    <li class="flex space-x-3">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 dark:bg-carrot-800/30 dark:text-carrot-500">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>

                        <span class="text-sm sm:text-base text-gray-500">
                            dodatkowymi ustaleniami (jeśli były poczynione)
                        </span>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
        <!-- End Col -->
        <div class="mt-4 md:mt-0">
            <img class="rounded-xl" src="{{asset('photo/bmw.jpg')}}" alt="Image Description">
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Tab Nav -->
    <nav class="max-w-6xl mx-auto grid sm:flex gap-y-px sm:gap-y-0 sm:gap-x-4" aria-label="Tabs" role="tablist">
        <button type="button" class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active" id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
            <svg class="flex-shrink-0 hidden sm:block h-7 w-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" />
                <path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" />
                <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z" />
                <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" />
                <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" />
            </svg>
            <span class="mt-5">
                <span class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">All-in-one workspace</span>
                <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">Create a business, whether you’ve got a fresh idea.</span>
            </span>
        </button>

        <button type="button" class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
            <svg class="flex-shrink-0 hidden sm:block h-7 w-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 14 4-4" />
                <path d="M3.34 19a10 10 0 1 1 17.32 0" />
            </svg>
            <span class="mt-5">
                <span class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Automation on a whole new level</span>
                <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">Use automation to scale campaigns profitably and save time doing it.</span>
            </span>
        </button>

        <button type="button" class="hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 p-3 md:p-5 rounded-xl dark:hs-tab-active:bg-white/[.05] dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
            <svg class="flex-shrink-0 hidden sm:block h-7 w-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                <path d="M5 3v4" />
                <path d="M19 17v4" />
                <path d="M3 5h4" />
                <path d="M17 19h4" />
            </svg>
            <span class="mt-5">
                <span class="hs-tab-active:text-blue-600 block font-semibold text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Solving problems for every team</span>
                <span class="hidden lg:block mt-2 text-gray-800 dark:text-gray-200">One tool for your company to share knowledge and ship projects.</span>
            </span>
        </button>
    </nav>
    <!-- End Tab Nav -->

    <!-- Tab Content -->
    <div class="mt-12 md:mt-16">
        <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
            <!-- Devices -->
            <div class="max-w-[1140px] lg:pb-32 relative">
                <!-- Mobile Device -->
                <figure class="hidden absolute bottom-0 start-0 z-[2] max-w-full w-60 h-auto mb-20 ms-20 lg:block">
                    <div class="p-1.5 bg-gray-100 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-gray-700 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)]">
                        <img class="max-w-full h-auto rounded-[1.25rem]" src="../assets/img/mockups/img9.jpg" alt="Image Description">
                    </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
                    <div class="relative flex items-center max-w-[50rem] bg-white border-b border-gray-100 rounded-t-lg py-2 px-24 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex space-x-1 absolute top-2/4 start-4 -translate-y-1">
                            <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                            <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                            <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                        </div>
                        <div class="flex justify-center items-center w-full h-full bg-gray-200 text-[.25rem] text-gray-800 rounded-sm sm:text-[.5rem] dark:bg-gray-700 dark:text-gray-200">www.preline.co</div>
                    </div>

                    <div class="bg-gray-800 rounded-b-lg">
                        <img class="max-w-full h-auto rounded-b-lg" src="../assets/img/mockups/img8.jpg" alt="Image Description">
                    </div>
                </figure>
                <!-- End Browser Device -->
            </div>
            <!-- End Devices -->
        </div>

        <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
            <!-- Devices -->
            <div class="max-w-[1140px] lg:pb-32 relative">
                <!-- Mobile Device -->
                <figure class="hidden absolute bottom-0 start-0 z-[2] max-w-full w-60 h-auto mb-20 ms-20 lg:block">
                    <div class="p-1.5 bg-gray-700 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)]">
                        <img class="max-w-full h-auto rounded-[1.25rem]" src="../assets/img/mockups/img11.jpg" alt="Image Description">
                    </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
                    <div class="relative flex items-center max-w-[50rem] bg-gray-800 border-b border-gray-700 rounded-t-lg py-2 px-24">
                        <div class="flex space-x-1 absolute top-2/4 start-4 -translate-y-1">
                            <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                            <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                            <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                        </div>
                        <div class="flex justify-center items-center w-full h-full bg-gray-700 text-[.25rem] text-gray-200 rounded-sm sm:text-[.5rem]">www.preline.co</div>
                    </div>

                    <div class="bg-gray-800 rounded-b-lg">
                        <img class="max-w-full h-auto rounded-b-lg" src="../assets/img/mockups/img10.jpg" alt="Image Description">
                    </div>
                </figure>
                <!-- End Browser Device -->
            </div>
            <!-- End Devices -->
        </div>

        <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
            <!-- Devices -->
            <div class="max-w-[1140px] lg:pb-32 relative">
                <!-- Mobile Device -->
                <figure class="hidden absolute bottom-0 start-0 z-[2] max-w-full w-60 h-auto mb-20 ms-20 lg:block">
                    <div class="p-1.5 bg-gray-100 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-gray-700 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)]">
                        <img class="max-w-full h-auto rounded-[1.25rem]" src="../assets/img/mockups/img13.jpg" alt="Image Description">
                    </div>
                </figure>
                <!-- End Mobile Device -->

                <!-- Browser Device -->
                <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto rounded-b-lg shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)]">
                    <div class="relative flex items-center max-w-[50rem] bg-white border-b border-gray-100 rounded-t-lg py-2 px-24 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex space-x-1 absolute top-2/4 start-4 -translate-y-1">
                            <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                            <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                            <span class="w-2 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></span>
                        </div>
                        <div class="flex justify-center items-center w-full h-full bg-gray-200 text-[.25rem] text-gray-800 rounded-sm sm:text-[.5rem] dark:bg-gray-700 dark:text-gray-200">www.preline.co</div>
                    </div>

                    <div class="bg-gray-800 rounded-b-lg">
                        <img class="max-w-full h-auto rounded-b-lg" src="../assets/img/mockups/img12.jpg" alt="Image Description">
                    </div>
                </figure>
                <!-- End Browser Device -->
            </div>
            <!-- End Devices -->
        </div>
    </div>
    <!-- End Tab Content -->
</div>
<!-- End Features -->
<!-- Testimonials with Stats -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center lg:justify-between">
        <div class="lg:col-span-5 lg:col-start-1">
            <!-- Title -->
            <div class="mb-8">
                <h2 class="mb-2 text-3xl text-gray-800 font-bold lg:text-4xl dark:text-gray-200">
                    It's all about speed
                </h2>
                <p class="text-gray-600 dark:text-gray-400">
                    We provide you with a test account that can be set up in seconds. Our main focus is getting responses to you as soon as we can.
                </p>
            </div>
            <!-- End Title -->

            <!-- Blockquote -->
            <blockquote class="relative">
                <svg class="absolute top-0 start-0 transform -translate-x-6 -translate-y-8 h-16 w-16 text-gray-200 dark:text-gray-800" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z" fill="currentColor" />
                </svg>

                <div class="relative z-10">
                    <p class="text-xl italic text-gray-800 dark:text-white">
                        Amazing people to work with. Very fast and professional partner.
                    </p>
                </div>

                <footer class="mt-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                        </div>
                        <div class="grow ms-4">
                            <div class="font-semibold text-gray-800 dark:text-gray-200">Josh Grazioso</div>
                            <div class="text-xs text-gray-500">Director Payments & Risk | Airbnb</div>
                        </div>
                    </div>
                </footer>
            </blockquote>
            <!-- End Blockquote -->
        </div>
        <!-- End Col -->

        <div class="mt-10 lg:mt-0 lg:col-span-6 lg:col-end-13">
            <div class="space-y-6 sm:space-y-8">
                <!-- List -->
                <ul class="grid grid-cols-2 divide-y divide-y-2 divide-x divide-x-2 divide-gray-200 overflow-hidden dark:divide-gray-700">
                    <li class="flex flex-col -m-0.5 p-4 sm:p-8">
                        <div class="flex items-end gap-x-2 text-3xl sm:text-5xl font-bold text-gray-800 mb-2 dark:text-gray-200">
                            45k+
                        </div>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                            users - from new startups to public companies
                        </p>
                    </li>

                    <li class="flex flex-col -m-0.5 p-4 sm:p-8">
                        <div class="flex items-end gap-x-2 text-3xl sm:text-5xl font-bold text-gray-800 mb-2 dark:text-gray-200">
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 7-7 7 7" />
                                <path d="M12 19V5" />
                            </svg>
                            23%
                        </div>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                            increase in traffic on webpages with Looms
                        </p>
                    </li>

                    <li class="flex flex-col -m-0.5 p-4 sm:p-8">
                        <div class="flex items-end gap-x-2 text-3xl sm:text-5xl font-bold text-gray-800 mb-2 dark:text-gray-200">
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 7-7 7 7" />
                                <path d="M12 19V5" />
                            </svg>
                            9.3%
                        </div>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                            boost in reply rates across sales outreach
                        </p>
                    </li>

                    <li class="flex flex-col -m-0.5 p-4 sm:p-8">
                        <div class="flex items-end gap-x-2 text-3xl sm:text-5xl font-bold text-gray-800 mb-2 dark:text-gray-200">
                            2x
                        </div>
                        <p class="text-sm sm:text-base text-gray-600 dark:text-gray-400">
                            faster than previous Preline versions
                        </p>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Testimonials with Stats -->
@endsection