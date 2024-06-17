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
                Wysyłka do <span class="text-carrot-500">Auto Lampy</span>
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
                        Wysyłka
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
            <h2 class="font-bold text-2xl lg:text-4xl text-gray-800 text-center">
                Dbając o twój czas i wygodę
            </h2>
            <div class="py-6 space-y-6 sm:space-y-8 grid grid-cols-2 gap-6">
                <ul role="list" class="space-y-2 sm:space-y-4" style="margin: 0;">
                    <li class="flex space-x-3 lg:text-xl">
                        <span class="text-xl">
                            <h3 class="mb-6"><span class="font-bold">Możesz do nas wysłać lampy</span> na poniższy adres</h3>
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span>
                            Auto Gamma
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span>
                            Stefana Banacha 11
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span>
                            41-219 Sosnowiec
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span>
                            <a href="tel:+48791066550" class="inline-flex items-center p-2 justify-center text-white bg-carrot-500 hover:bg-carrot-600 focus:ring-4 focus:outline-none focus:ring-carrot-300 font-medium rounded-lg text-lg px-4 py-2 text-center"><i class="fa-solid fa-phone mr-2"></i>791 066 550</a>
                        </span>
                    </li>
                </ul>
                <ul role="list" class="space-y-2 sm:space-y-4" style="margin: 0;">
                    <li class="flex space-x-3 lg:text-xl">
                        <span class="text-xl">
                            <h3 class="mb-6">Nie zapomnij <span class="font-bold">o dołączeniu poniższych informacji</span></h3>
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 ">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <span>
                            Adres zwrotny
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 ">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <span>
                            Numer kontaktowy
                        </span>
                    </li>
                    <li class="flex space-x-3 lg:text-xl">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 ">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <span>
                            Opis lub zakres prac do realizacji
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Col -->
        <div class="mt-4 md:mt-0">
            <img class="rounded-xl" src="{{asset('photo/ship2.jpg')}}" alt="Image Description">
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
        <div>
            <img class="rounded-xl" src="{{asset('photo/ship.jpg')}}" alt="Image Description">
        </div>
        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4 flex flex-col justify-center items-center text-center">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Kurier
                    </h2>
                    <p class="text-gray-500 lg:text-lg">
                        Wychodząc naprzeciw naszym klientom zawsze staramy się, aby nasze usługi były jak najwyższej jakości. Dlatego możesz zamówić kuriera który odbierze paczkę i dostarczy ją na nasz adres.
                    </p>
                    <p class="text-gray-500 lg:text-lg">
                        Pamiętaj, aby wydrukować list przewozowy oraz zapakować przesyłkę w bezpieczny sposób!
                    </p>
                    <!-- End Title -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
</div>
@endsection