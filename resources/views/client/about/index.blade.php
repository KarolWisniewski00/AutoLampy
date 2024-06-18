@extends('layouts.guest')
@section('content')
<div class="relative -mt-2">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2 w-full">
        <div class="bg-gradient-to-r from-gray-300/50 to-gray-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] "></div>
        <div class="bg-gradient-to-tl from-gray-50 via-gray-100 to-gray-50 blur-3xl w-[90rem] h-[50rem] rounded-xls origin-top-left -rotate-12 -translate-x-[15rem]"></div>
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
                        <a class="flex items-center text-sm text-gray-500 hover:text-carrot-600 focus:outline-none focus:text-carrot-600" href="{{route('index')}}">
                            <i class="fa-solid fa-house flex-shrink-0 me-3 h-4 w-4"></i>
                            Strona Główna
                        </a>
                        <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
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
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32 my-16">
        <div>
            <img class="rounded-xl" src="{{asset('photo/about1.jpg')}}" alt="">
        </div>
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Serwis Auto Lampy w Sosnowcu
                    </h2>
                    <p class="text-gray-500">
                        Auto Lampy Sosnowiec to zespół ludzi, którzy tworzą innowacyjne
                        rozwiązania w zakresie oświetlenia samochodowego. Naszym celem jest
                        bezpieczeństwo naszych klientów, zapewniając im idealne oświetlenie na
                        drodze, nawet w trudnych warunkach atmosferycznych. Każdy nasz klient
                        zasługuje na indywidualne podejście i rozwiązanie problemu. Naszym
                        priorytetem jest, aby zapewnić taką indywidualność i najwyższą jakość
                        wykonywanych przez nas usług.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Grid -->
    <!--BANNER-->
    <!-- Icon Blocks -->
    <div class="py-10 lg:py-14 mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 items-center gap-4">
            <div class="flex justify-center items-center text-5xl font-bold uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent">
                <i class="fa-solid fa-car"></i>
            </div>
            <div class="flex justify-center items-center text-5xl font-bold uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent">
                <i class="fa-solid fa-lightbulb"></i>
            </div>
            <div class="flex justify-center items-center text-5xl font-bold uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent">
                <i class="fa-solid fa-shield"></i>
            </div>
            <div class="flex justify-center items-center text-5xl font-bold uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
    </div>
    <!-- End Icon Blocks -->
    <!-- Grid -->
    <div class="xl:grid xl:grid-cols-2 xl:items-center xl:gap-12 xl:gap-32 my-16">
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Nasze usługi
                    </h2>
                    <div class="grid grid-cols-12 gap-4 xl:gap-6">
                        <div class="col-span-12 md:col-span-6 md:order-2 lg:col-span-4 grid gap-4 xl:gap-6">
                            <!-- Card -->
                            <a class="gsap md:order-1 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#re">
                                <div class="relative overflow-hidden w-full h-full rounded-xl">
                                    <div class="p-6 flex flex-col justify-center items-center md:min-h-[250px] text-center rounded-xl">
                                        <h3 class="text-md text-md font-semibold text-gray-800">
                                            Regeneracja reflektorów
                                        </h3>
                                    </div>

                                    <div class="absolute top-0 start-full -z-[1] w-60 h-20 bg-carrot-100 blur-[100px] -translate-y-full -translate-x-1/2"></div>
                                    <div class="absolute top-0 start-full -z-[1] w-60 h-20 bg-gray-100 blur-[100px] -translate-y-full -translate-x-1/2"></div>
                                    <div class="absolute top-1/2 start-1/2 -z-[1] w-60 h-32 bg-gray-100 blur-[100px] -translate-y-1/2 -translate-x-1/2"></div>
                                    <div class="absolute -bottom-40 -end-24 -z-[1] w-60 h-32 bg-carrot-200 blur-[100px]"></div>
                                    <div class="absolute -bottom-[635px] -end-[635px] -z-[1] w-[635px] h-[635px] border border-dashed border-gray-200 rounded-full transform -translate-y-[255px] -translate-x-[310px] opacity-40"></div>
                                    <div class="absolute -bottom-[490px] -end-[490px] -z-[1] w-[490px] h-[490px] border border-dashed border-gray-200 rounded-full transform -translate-y-[190px] -translate-x-[240px] opacity-60"></div>
                                    <div class="absolute -bottom-[340px] -end-[340px] -z-[1] w-[340px] h-[340px] border border-dashed border-gray-200 rounded-full transform -translate-y-[120px] -translate-x-[170px] opacity-80"></div>
                                    <div class="absolute -bottom-[200px] -end-[200px] -z-[1] w-[200px] h-[200px] border border-dashed border-gray-200 rounded-full transform -translate-y-[60px] -translate-x-[100px]"></div>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="gsap md:order-2 relative p-6 flex flex-col justify-center items-center md:min-h-[130px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="tel:+48791066550">
                                <h3 class="text-md text-md font-semibold text-gray-800">
                                    Polerowanie kloszy
                                </h3>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->

                        <div class="col-span-12 md:col-span-6 lg:col-span-4 md:order-1 grid gap-4 xl:gap-6">
                            <!-- Card -->
                            <a class="gsap md:order-2 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#biled">
                                <div class="relative overflow-hidden w-full h-full rounded-xl">
                                    <div class="p-6 flex flex-col justify-center items-center md:min-h-[250px] text-center rounded-xl">
                                        <h3 class="text-md text-md font-semibold text-gray-800">
                                            Naprawa lamp LED
                                        </h3>
                                    </div>

                                    <div class="absolute top-1/2 -start-1/2 -z-[1] w-60 h-32 bg-carrot-100 blur-[100px] -translate-y-1/2"></div>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="gsap md:order-1 relative p-6 flex flex-col justify-center items-center md:min-h-[130px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#rep">
                                <h3 class="text-md text-md font-semibold text-gray-800">
                                    Uszczelnianie i osuszanie zalanych reflektorów
                                </h3>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->

                        <div class="col-span-12 lg:col-span-4 md:order-3 grid md:grid-cols-2 lg:grid-cols-1 gap-4 xl:gap-6">
                            <!-- Card -->
                            <a class="gsap md:order-2 relative" href="{{route('service')}}#re">
                                <div class="overflow-hidden p-6 flex flex-col justify-between items-center md:min-h-[250px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
                                    <div class="p-6 flex flex-col justify-center items-center md:min-h-[250px] text-center rounded-xl">
                                        <h3 class="text-md text-md font-semibold text-gray-800">
                                            Regeneracja i przeróbka reflektorów motocyklowych
                                        </h3>
                                    </div>
                                </div>

                                <div class="absolute top-0 end-0 -z-[1] w-70 h-auto">
                                    <svg width="384" height="268" viewBox="0 0 384 268" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_f_6966_190390)">
                                            <rect x="200.667" y="-57" width="240.294" height="124.936" fill="#ffda46" fill-opacity="0.35"></rect>
                                        </g>
                                        <defs>
                                            <filter id="filter0_f_6966_190390" x="0.666687" y="-257" width="640.294" height="524.936" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_6966_190390"></feGaussianBlur>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="gsap md:order-1 relative p-6 flex flex-col justify-center items-center md:min-h-[130px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#biled">
                                <h3 class="text-md text-md font-semibold text-gray-800">
                                    Modyfikacja reflektorów na technologię BI-LED
                                </h3>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <div class="grid grid-cols-12 gap-4 xl:gap-6">
                        <div class="col-span-12 md:col-span-6 md:order-2 lg:col-span-4 grid gap-4 xl:gap-6">
                            <!-- Card -->
                            <a class="gsap md:order-1 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#tuning">
                                <div class="relative overflow-hidden w-full h-full rounded-xl">
                                    <div class="p-6 flex flex-col justify-center items-center md:min-h-[250px] text-center rounded-xl">
                                        <h3 class="text-md text-md font-semibold text-gray-800">
                                            Tuning reflektorów samochodowych i motocyklowych
                                        </h3>
                                    </div>

                                    <div class="absolute top-0 start-full -z-[1] w-60 h-20 bg-carrot-100 blur-[100px] -translate-y-full -translate-x-1/2"></div>
                                    <div class="absolute top-0 start-full -z-[1] w-60 h-20 bg-gray-100 blur-[100px] -translate-y-full -translate-x-1/2"></div>
                                    <div class="absolute top-1/2 start-1/2 -z-[1] w-60 h-32 bg-gray-100 blur-[100px] -translate-y-1/2 -translate-x-1/2"></div>
                                    <div class="absolute -bottom-40 -end-24 -z-[1] w-60 h-32 bg-carrot-200 blur-[100px]"></div>
                                    <div class="absolute -bottom-[635px] -end-[635px] -z-[1] w-[635px] h-[635px] border border-dashed border-gray-200 rounded-full transform -translate-y-[255px] -translate-x-[310px] opacity-40"></div>
                                    <div class="absolute -bottom-[490px] -end-[490px] -z-[1] w-[490px] h-[490px] border border-dashed border-gray-200 rounded-full transform -translate-y-[190px] -translate-x-[240px] opacity-60"></div>
                                    <div class="absolute -bottom-[340px] -end-[340px] -z-[1] w-[340px] h-[340px] border border-dashed border-gray-200 rounded-full transform -translate-y-[120px] -translate-x-[170px] opacity-80"></div>
                                    <div class="absolute -bottom-[200px] -end-[200px] -z-[1] w-[200px] h-[200px] border border-dashed border-gray-200 rounded-full transform -translate-y-[60px] -translate-x-[100px]"></div>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="gsap md:order-2 relative p-6 flex flex-col justify-center items-center md:min-h-[130px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#eu">
                                <h3 class="text-md text-md font-semibold text-gray-800">
                                    Przeróbka lamp i reflektorów USA/UK na EU wraz z montażem światła przeciwmgielnego
                                </h3>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->

                        <div class="col-span-12 md:col-span-6 lg:col-span-4 md:order-1 grid gap-4 xl:gap-6">
                            <!-- Card -->
                            <a class="gsap md:order-2 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="tel:+48791066550">
                                <div class="relative overflow-hidden w-full h-full rounded-xl">
                                    <div class="p-6 flex flex-col justify-center items-center md:min-h-[250px] text-center rounded-xl">
                                        <h3 class="text-md text-md font-semibold text-gray-800">
                                            Oklejaniekloszy folią PPF
                                        </h3>
                                    </div>

                                    <div class="absolute top-1/2 -start-1/2 -z-[1] w-60 h-32 bg-carrot-100 blur-[100px] -translate-y-1/2"></div>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="gsap md:order-1 relative p-6 flex flex-col justify-center items-center md:min-h-[130px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="tel:+48791066550">
                                <h3 class="text-md text-md font-semibold text-gray-800">
                                    Wymiana kloszy i innych elementów reflektorów
                                </h3>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->

                        <div class="col-span-12 lg:col-span-4 md:order-3 grid md:grid-cols-2 lg:grid-cols-1 gap-4 xl:gap-6">
                            <!-- Card -->
                            <a class="gsap md:order-2 relative" href="{{route('service')}}#rep">
                                <div class="overflow-hidden p-6 flex flex-col justify-between items-center md:min-h-[250px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
                                    <div class="p-6 flex flex-col justify-center items-center md:min-h-[250px] text-center rounded-xl">
                                        <h3 class="text-md text-md font-semibold text-gray-800">
                                            Naprawa i spawanie plastikowych elementów
                                        </h3>
                                    </div>
                                </div>

                                <div class="absolute top-0 end-0 -z-[1] w-70 h-auto">
                                    <svg width="384" height="268" viewBox="0 0 384 268" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_f_6966_190390)">
                                            <rect x="200.667" y="-57" width="240.294" height="124.936" fill="#ffda46" fill-opacity="0.35"></rect>
                                        </g>
                                        <defs>
                                            <filter id="filter0_f_6966_190390" x="0.666687" y="-257" width="640.294" height="524.936" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_6966_190390"></feGaussianBlur>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                            <!-- End Card -->

                            <!-- Card -->
                            <a class="gsap md:order-1 relative p-6 flex flex-col justify-center items-center md:min-h-[130px] text-center rounded-xl before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg" href="{{route('service')}}#re">
                                <h3 class="text-md text-md font-semibold text-gray-800">
                                    Regeneracja odbłyśników
                                </h3>
                            </a>
                            <!-- End Card -->
                        </div>
                        <!-- End Col -->
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 xl:mt-0">
            <img class="rounded-xl" src="{{asset('photo/about2.jpg')}}" alt="">
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
@endsection