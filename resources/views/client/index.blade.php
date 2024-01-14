@extends('layouts.guest')
@section('content')
@include('components.slider')
@include('components.akcent-banner')
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20 my-16">
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Jakie usługi oferujemy w Sosnowcu?
                    </h2>
                    <p class="text-gray-500">
                        W Auto lampy zajmujemy się głównie wykonywaniem napraw lamp samochodowych oraz ich modyfikowaniem. Nasi specjaliści pozjadają odpowiednie doświadczenie oraz wiedzę, aby zająć się odnową twoich reflektorów oraz ich modyfikacją. Na rynku nasza firma działa już od ponad 20 lat. Przez ten cały czas wykonaliśmy pomyślnie tysiące zleceń dla naszych klientów. Aby jednak nie stać w miejscu, inwestujemy w nowe technologie, czego efektem jest coraz bogatsza oferta naszych usług. Oprócz tego, że w Auto lampy zajmujemy się regeneracją oraz przerabianiem lamp samochodowych, to również od pewnego czasu wykonujemy usługi związane z naprawą szyb, usuwaniem wgnieceń oraz zabezpieczaniem za pomocą foli samochodowej. Nasi klienci mogą wiec liczyć na to, że kompleksowo zajmiemy się przywróceniem ich samochodu do dobrze wyglądającego stanu wizualnego. Zajmujemy się również przystosowywaniem oświetlenia samochodowego pojazdów sprowadzonych do wymogów prawnych, jakie stawia Unia Europejska. Posiadamy wiele serwisów w całej Polsce, a efekty naszej pracy sprawiają, że od nasza firma jest liderem w branży prac związanych z oświetleniem samochodowym.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            <img class="rounded-xl" src="{{asset('photo/index1.jpg')}}" alt="Image Description">
        </div>
    </div>
</div>
<!-- End Features -->
<!--PARALAX-->
<div class="bg-cover bg-center h-full text-white py-24 px-10 object-fill parallax" style="background-image: url({{asset('photo/index4.jpg')}})">

</div>
<!-- Features -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20 my-16">
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
        <div class="mt-4 md:mt-0">
            <div class="grid grid-cols-2 grid-rows-2">
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-star w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Wielu zadowolonych klientow</span></span>
                </div>
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-person-circle-check w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Wykwalifikowani pracownicy</span></span>
                </div>
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-money-bill-1-wave w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Rozsądna cena</span></span>
                </div>
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-award w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Gwarancja na wykonane usługi</span></span>
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Dlaczego warto skorzystać z naszych usług?
                    </h2>
                    <p class="text-gray-500">
                        W Auto Lampy Sosnowiec zawsze stawiamy potrzeby i oczekiwania naszych klientów na pierwszym miejscu. Do każdego zlecenia podchodzimy indywidualnie, aby uzyskane efekty były jak najlepsze. W naszym serwisie zatrudniamy jedynie wykwalifikowane i doświadczone osoby, które starają się zawsze wykonywać swoją pracę jak najlepiej. Na wszystkie wykonywane przez nas usługi dajemy klientom gwarancję, która sprawia, że w razie jakichkolwiek problemów mogą do nas wrócić, a my zajmiemy się ich rozwiązaniem. Staramy się także iść z tym jakie obecnie panują trendy na rynku, dlatego inwestujemy bardzo dużo w nowe maszyny oraz szkolenia. Dzięki temu możemy wykorzystywać w swojej pracy najlepsze dostępne na rynku rozwiązania. W efekcie nasi klienci otrzymują wysokiej jakości usługi oraz produkty, które często odmieniają całkowicie samochód na lepsze.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features -->
<!--BANNER-->
<div class="bg-gradient-to-r from-carrot-600 to-carrot-400">
    <div class="grid grid-cols-3 items-center">
        <div class="my-4 w-full">
            <div class="bg-cover bg-center h-full text-white py-72 px-10 object-fill" style="background-image: url({{asset('photo/before.jpg')}})">

            </div>
        </div>
        <div class="my-4 w-full">
            <div class="bg-cover bg-center h-full text-white py-72 px-10 object-fill" style="background-image: url({{asset('photo/center.jpg')}})">

            </div>
        </div>
        <div class="my-4 w-full">
            <div class="bg-cover bg-center h-full text-white py-72 px-10 object-fill" style="background-image: url({{asset('photo/after.jpg')}})">

            </div>
        </div>
    </div>
</div>
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10 mb-20 my-16">
<div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-3xl text-gray-800">
            Kompleksowe usługi w <span class="text-carrot-500">Auto Lampy</span>
        </h2>
        <p class="text-gray-500 mt-2">
            Auto Lampy to firma, która funkcjonuje na rynku od 1993 roku. Odkąd istniejemy, naszej pracy przyświeca przede wszystkim idea świadczenia usług jak najwyższe jakości. Dowodem na to są liczne nagrody branżowe, jakie zdobyliśmy przez lata funkcjonowania. Mimo wszystko jednak największą motywacją do działania jest zadowolenie naszych klientów z profesjonalnie wykonanej usługi. Zapraszamy do zapoznania się z szeroką gamą naszych usług.
        </p>
    </div>
    @include('components.service')
    <div class="py-10 lg:py-14 mx-auto">
        <div class="min-h-[35vh] bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[75vh]" style="background-image: url({{asset('photo/golf.jpg')}});">
            <div class="absolute bottom-0 start-0 end-0 max-w-xs text-center mx-auto p-6 md:start-auto md:text-start md:mx-0">

                <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7">
                    <div class="hidden md:block">
                        <h3 class="text-lg font-bold text-gray-800 sm:text-2xl">Chcesz zobaczyć jak pracujemy?</h3>
                        <p class="mt-2 text-gray-800">Pokażemy ci lampy przed i po regeneracji.</p>
                    </div>

                    <div class="md:mt-16">
                        <button type="button"  class="flex items-center gap-2 text-sm font-medium text-gray-800 hover:text-gray-500" href="#">
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="5 3 19 12 5 21 5 3" />
                            </svg>
                            Zobacz
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection