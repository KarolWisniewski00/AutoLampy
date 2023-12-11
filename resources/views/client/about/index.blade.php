@extends('layouts.guest')
@section('content')
<div class="relative -mt-2">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2 w-full">
        <div class="bg-gradient-to-r from-gray-300/50 to-gray-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-gray-900/50 dark:to-gray-900"></div>
        <div class="bg-gradient-to-tl from-gray-50 via-gray-100 to-gray-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-gray-900/70"></div>
    </div>
    <!-- End Gradients -->
    <div class="relative z-10 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-12 md:pt-20 ">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-3xl text-gray-800">
                O firmie <span class="text-carrot-500">Auto Lampy</span>
            </h2>
            <div class="mx-auto flex items-center justify-center my-4">
                <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-carrot-600 focus:outline-none focus:text-carrot-600 dark:focus:text-carrot-500" href="{{route('index')}}">
                            <i class="fa-solid fa-house flex-shrink-0 me-3 h-4 w-4"></i>
                            Strona Główna
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                        O nas
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
        <div>
            <img class="rounded-xl" src="{{asset('photo/bmw.jpg')}}" alt="Image Description">
        </div>
        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-gray-200">
                        Poznaj serwis Auto Lampy w Sosnowcu
                    </h2>
                    <p class="text-gray-500">
                        Auto Lampy Sosnowiec to marka, której celem jest popularyzacja innowacyjnego podejścia do tematu oświetlenia samochodowego. Doskonale zdajemy sobie sprawę z faktu, że doskonała widoczność na drodze po zmroku to jeden z najważniejszych czynników bezpieczeństwa naszych klientów. Z tego powodu dokładamy największych starań, aby wysoka jakość usług świadczonych przez nasze warsztaty samochodowe była gwarancją komfortowego i bezawaryjnego dotarcia do punktu docelowego podróży, nawet w przypadku pogorszenia warunków pogodowych. Potwierdzeniem tego jest zadowolenie setki naszych klientów, którzy wybrali usługi Auto Lampy Sosnowiec i zapewnili najlepsze oświetlenie swoim pojazdom. Naszym priorytetem jest indywidualne podejście do klienta i jego problemu – doskonale zdajemy sobie sprawę, że każdy samochód ma unikatowe cechy, dlatego proponujemy rozwiązania, które w pełni zaspokoją nawet najbardziej niekonwencjonalne potrzeby użytkowników dróg.
                    </p>
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
                            <span class="font-bold">Łatwo i szybko</span> załatwisz regenerację
                        </span>
                    </li>

                    <li class="flex space-x-3">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 dark:bg-carrot-800/30 dark:text-carrot-500">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>

                        <span class="text-sm sm:text-base text-gray-500">
                            Największa <span class="font-bold">moc</span> w Auto Lampy
                        </span>
                    </li>

                    <li class="flex space-x-3">
                        <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-carrot-50 text-carrot-600 dark:bg-carrot-800/30 dark:text-carrot-500">
                            <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>

                        <span class="text-sm sm:text-base text-gray-500">
                            Tą liste można zmienić
                        </span>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
    <!-- Icon Blocks -->
    <div class="py-10 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-12">
            <!-- Icon Block -->
            <div>
                <div class="relative flex justify-center items-center w-12 h-12 bg-white rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-carrot-600 before:via-transparent before:to-carrot-600 before:rounded-xl dark:bg-slate-900">
                    <svg class="flex-shrink-0 w-6 h-6 text-carrot-600 dark:text-carrot-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="10" height="14" x="3" y="8" rx="2" />
                        <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                        <path d="M8 18h.01" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Przykład</h3>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Ikony można podmienić</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div>
                <div class="relative flex justify-center items-center w-12 h-12 bg-white rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-carrot-600 before:via-transparent before:to-carrot-600 before:rounded-xl dark:bg-slate-900">
                    <svg class="flex-shrink-0 w-6 h-6 text-carrot-600 dark:text-carrot-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 7h-9" />
                        <path d="M14 17H5" />
                        <circle cx="17" cy="17" r="3" />
                        <circle cx="7" cy="7" r="3" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Przykład</h3>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Ikony można podmienić</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div>
                <div class="relative flex justify-center items-center w-12 h-12 bg-white rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-carrot-600 before:via-transparent before:to-carrot-600 before:rounded-xl dark:bg-slate-900">
                    <svg class="flex-shrink-0 w-6 h-6 text-carrot-600 dark:text-carrot-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Przykład</h3>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Ikony można podmienić</p>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div>
                <div class="relative flex justify-center items-center w-12 h-12 bg-white rounded-xl before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-carrot-600 before:via-transparent before:to-carrot-600 before:rounded-xl dark:bg-slate-900">
                    <svg class="flex-shrink-0 w-6 h-6 text-carrot-600 dark:text-carrot-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Przykład</h3>
                    <p class="mt-1 text-gray-600 dark:text-gray-400">Ikony można podmienić</p>
                </div>
            </div>
            <!-- End Icon Block -->
        </div>
    </div>
    <!-- End Icon Blocks -->
    <!-- Team -->
    <div class="py-10 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Nasz zespół</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Kreatywne osoby</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full w-20 h-20" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">
                            Jerzy
                        </h3>
                        <p class="text-xs uppercase text-gray-500">
                            CEO
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500">
                    Kilka słów o sobie
                </p>


            </div>
            <!-- End Col -->

            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full w-20 h-20" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">
                            Paulina
                        </h3>
                        <p class="text-xs uppercase text-gray-500">
                            Obsługa klienta
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500">
                    Kilka słów o sobie
                </p>


            </div>
            <!-- End Col -->

            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full w-20 h-20" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">
                            Bartosz
                        </h3>
                        <p class="text-xs uppercase text-gray-500">
                            Kierownik zespołu
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500">
                    Kilka słów o sobie
                </p>


            </div>
            <!-- End Col -->

            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full w-20 h-20" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">
                            Marcin
                        </h3>
                        <p class="text-xs uppercase text-gray-500">
                            Specjalista ds. regeneracji
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500">
                    Kilka słów o sobie
                </p>


            </div>
            <!-- End Col -->

            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full w-20 h-20" src="https://podesty-rentals.pl/wp-content/uploads/2023/04/marcin.jpg" alt="Image Description">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">
                            Marcin
                        </h3>
                        <p class="text-xs uppercase text-gray-500">
                            Specjalista ds. montażu i demontażu lamp
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500">
                    Kilka słów o sobie
                </p>


            </div>
            <!-- End Col -->

            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full w-20 h-20" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">
                            Rafał
                        </h3>
                        <p class="text-xs uppercase text-gray-500">
                            Specjalista ds. rozklejania i sklejania kloszy
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500">
                    Kilka słów o sobie
                </p>


            </div>
            <!-- End Col -->

        </div>
        <!-- End Grid -->
    </div>
    <!-- End Team -->
    <!-- Features -->
    <div class="py-10 lg:py-14 mx-auto">
        <div class="min-h-[35vh] bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[75vh]" style="background-image: url({{asset('photo/golf.jpg')}});">
            <div class="absolute bottom-0 start-0 end-0 max-w-xs text-center mx-auto p-6 md:start-auto md:text-start md:mx-0">
                <!-- Card -->
                <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7 dark:bg-gray-800">
                    <div class="hidden md:block">
                        <h3 class="text-lg font-bold text-gray-800 sm:text-2xl dark:text-gray-200">Chcesz zobaczyć jak pracujemy?</h3>
                        <p class="mt-2 text-gray-800 dark:text-gray-200">Pokażemy ci lampy przed i po regeneracji.</p>
                    </div>

                    <div class="md:mt-16">
                        <a class="flex items-center gap-2 text-sm font-medium text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-gray-400" href="#">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="5 3 19 12 5 21 5 3" />
                            </svg>
                            Zobacz
                        </a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- End Features -->
</div>
<!-- End Features -->
@endsection