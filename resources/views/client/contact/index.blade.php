@extends('layouts.guest')
@section('content')
<div class="relative -mt-2">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2 w-full">
        <div class="bg-gradient-to-r from-gray-300/50 to-gray-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem]"></div>
        <div class="bg-gradient-to-tl from-gray-50 via-gray-100 to-gray-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem]"></div>
    </div>
    <!-- End Gradients -->
    <div class="relative z-10 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-12 md:pt-20 ">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-3xl text-gray-800">
                Auto Lampy <span class="text-carrot-500">Kontakt</span>
            </h2>
            <div class="mx-auto flex items-center justify-center my-4">
                <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-carrot-600 focus:outline-none focus:text-carrot-600 " href="{{route('index')}}">
                            <i class="fa-solid fa-house flex-shrink-0 me-3 h-4 w-4"></i>
                            Strona Główna
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                        Kontakt
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">

        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4 text-center">
                    <h2 class="font-bold text-4xl text-gray-800">
                        Znajdziesz nas tutaj
                    </h2>
                    <p class="text-gray-500">
                    <div class="text-2xl">Stefana Banacha 11</div>
                    <div class="text-2xl">41-219 Sosnowiec</div>
                    </p>
                    <a href="tel:+48791066550" class="inline-flex items-center p-2 justify-center text-white bg-carrot-500 hover:bg-carrot-600 focus:ring-4 focus:outline-none focus:ring-carrot-300 font-medium rounded-lg text-lg px-4 py-2 text-center"><i class="fa-solid fa-phone mr-2"></i>791 066 550</a>
                    <a href="mailto:info@autogammasosnowiec.pl" class="inline-flex items-center p-2  justify-center text-white bg-carrot-500 hover:bg-carrot-600 focus:ring-4 focus:outline-none focus:ring-carrot-300 font-medium rounded-lg text-lg px-4 py-2 text-center"><i class="fa-solid fa-envelope mr-2"></i>info@autogammasosnowiec.pl</a>
                </div>
                <!-- End Title -->

            </div>
        </div>
        <!-- End Col -->
        <div class="mt-4 md:mt-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2548.20292805302!2d19.175263277550894!3d50.30680499769486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716db4568792661%3A0x5b771baa8976af62!2sRegeneracja%20reflektor%C3%B3w%20i%20odb%C5%82y%C5%9Bnik%C3%B3w%20lamp%2C%20naprawa%20szyb%20-%20Auto%20Gamma!5e0!3m2!1spl!2spl!4v1705267194598!5m2!1spl!2spl" class="rounded-xl w-full h-auto" style="min-height: 40vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
@endsection