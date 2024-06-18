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
                Kompleksowe usługi w <span class="text-carrot-500">Auto Lampy</span>
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
                        Usługi
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pb-12 md:pt-12 md:pb-24 -mt-2">
    <a href="tel:+48791066550" id="re" class="flex my-6 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
        <div class="relative overflow-hidden w-full h-full rounded-xl">
            <div class="p-6 flex flex-col justify-center items-center md:min-h-[380px] text-center rounded-xl">
                <span class="bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent text-4xl md:text-7xl font-bold pb-4">
                    Regeneracja reflektorów
                </span>
                <p class="mt-2 text-gray-500">
                    Wśród naszych usług oferujemy między innymi pełną regenerację
                    reflektorów, która przywraca oryginalne cechy lampy. Przyczyną
                    pogorszenia oświetlenia w samochodach na przestrzeni lat najczęściej jest
                    wypalony lub uszkodzony odbłyśnik. W ramach regeneracji czyścimy
                    reflektor w środku, polerujemy soczewki oraz napylamy próżniowo
                    odbłyśnik, dzięki czemu reflektor nabiera ponownie fabrycznych

                    parametrów. Dodatkowo możemy wypolerować plastikowe klosze
                    reflektorów i nałożyć specjalną folie ochronną PPF, aby zabezpieczyć je
                    przed promieniowaniem UV i mechanicznymi uszkodzeniami na dłuższy
                    czas.
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-carrot-600 font-medium">
                    Zadzwoń
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </p>
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
    <a href="tel:+48791066550" id="biled" class="flex my-6 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
        <div class="relative overflow-hidden w-full h-full rounded-xl">
            <div class="p-6 flex flex-col justify-center items-center md:min-h-[380px] text-center rounded-xl">
                <span class="bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent text-4xl md:text-4xl md:text-7xl font-bold pb-4">
                    Montaż oświetlenia BI-LED
                </span>
                <p class="mt-2 text-gray-500">
                    Wymienimy twoje oświetlenie halogenowe, czy oświetlenie w technologii
                    xenon na nowoczesne i niezawodne oświetlenie BI-LED. Taka adaptacja
                    pozwala uzyskać najlepszy efekt świetlny, taki jak w najnowocześniejszych
                    reflektorach w technologii LED. Zastosowane projektory BI-LED wraz z
                    soczewką dobieramy i montujemy indywidualnie do każdego pojazdu.
                    Projektor BI-LED wraz z soczewką zapewnia najwyższej jakości jasne
                    światło, wykorzystywane zarówno jako światła drogowe oraz światła mijania
                    w jednym. Dzięki montażu nowoczesnej technologii BI-LED droga staje się
                    bardziej widoczna, a twoje bezpieczeństwo i komfort jazdy znacznie się
                    zwiększa. Dodatkowo soczewki BI-LED zdecydowanie wpływają na lepszy i
                    nowoczesny wygląd twojego samochodu.
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-carrot-600 font-medium">
                    Zadzwoń
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </p>
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
    <a href="tel:+48791066550" id="tuning" class="flex my-6 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
        <div class="relative overflow-hidden w-full h-full rounded-xl">
            <div class="p-6 flex flex-col justify-center items-center md:min-h-[380px] text-center rounded-xl">
                <span class="bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent text-4xl md:text-7xl font-bold pb-4">
                    Tuning lamp samochodowych
                </span>
                <p class="mt-2 text-gray-500">
                    Chciałbyś całkowicie zmienić wygląd swoich reflektorów lub nadać im
                    niepowtarzalny charakter? Oferujemy tuning reflektorów polegający między
                    innymi na montażu ringów, czy montażu pasków DRL, które obsługują
                    kierunkowskazy dynamiczne, światła pozycyjne i dzienne w jednym.
                    Możemy też pomalować wnętrze lampy na dowolny kolor, czy zamontować
                    unikatowy system podświetlenia soczewki tzw „devil eyes” oraz wiele
                    innych.
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-carrot-600 font-medium">
                    Zadzwoń
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </p>
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
    <a href="tel:+48791066550" id="rep" class="flex my-6 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
        <div class="relative overflow-hidden w-full h-full rounded-xl">
            <div class="p-6 flex flex-col justify-center items-center md:min-h-[380px] text-center rounded-xl">
                <span class="bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent text-4xl md:text-7xl font-bold pb-4">
                    Naprawa lamp samochodowych
                </span>
                <p class="mt-2 text-gray-500">
                    W ofercie posiadamy dużą ilość części do reflektorów, takich jak klosze,
                    obudowy, przetwornice, diody LED, czy światłowody. Naprawiamy
                    uszkodzone reflektory LED, światłowody, wiązki i inne. Zajmujemy się
                    również osuszaniem i uszczelnianiem zaparowanych, czy zalanych lamp
                    samochodowych. Naprawiamy również uszkodzone uchwyty i inne
                    elementy plastikowe. W naszej ofercie znajdziesz również naprawę
                    ledowych lamp tylnych.
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-carrot-600 font-medium">
                    Zadzwoń
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </p>
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
    <a href="tel:+48791066550" id="eu" class="flex my-6 relative before:absolute before:inset-0 before:z-10 before:border before:border-gray-200 before:rounded-xl before:transition before:hover:border-2 before:hover:border-carrot-600 before:hover:shadow-lg">
        <div class="relative overflow-hidden w-full h-full rounded-xl">
            <div class="p-6 flex flex-col justify-center items-center md:min-h-[480px] text-center rounded-xl">
                <span class="bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent text-4xl md:text-7xl font-bold pb-4">
                    Przeróbka lamp USA, UK na EU
                </span>
                <p class="mt-2 text-gray-500">
                    Dostosujemy twoje lampy w sprowadzonym samochodzie do standardów
                    europejskich, aby bez problemów można było wykonać przegląd techniczny.
                    Przerabiamy reflektory i lampy poprzez zmianę przysłony w reflektorach,
                    czy kolorów diód kierunkowskazów w lampach tylnych, dokonujemy

                    również kodowania, oraz montażu światła przeciwmgielnego, w przypadku
                    jego braku. Dodatkowo możemy zmienić oprogramowanie w urządzeniach
                    multimedialnych, np. na język polski.
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-carrot-600 font-medium">
                    Zadzwoń
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </p>
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
</div>
@endsection