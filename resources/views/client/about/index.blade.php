@extends('layouts.guest')
@section('content')
<div class="relative -mt-2">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2 w-full">
        <div class="bg-gradient-to-r from-gray-300/50 to-gray-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] "></div>
        <div class="bg-gradient-to-tl from-gray-50 via-gray-100 to-gray-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem]"></div>
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
            <img class="rounded-xl" src="{{asset('photo/about1.jpg')}}" alt="Image Description">
        </div>
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Poznaj serwis Auto Lampy w Sosnowcu
                    </h2>
                    <p class="text-gray-500">
                        Auto Lampy Sosnowiec to marka, której celem jest popularyzacja innowacyjnego podejścia do tematu oświetlenia samochodowego. Doskonale zdajemy sobie sprawę z faktu, że doskonała widoczność na drodze po zmroku to jeden z najważniejszych czynników bezpieczeństwa naszych klientów. Z tego powodu dokładamy największych starań, aby wysoka jakość usług świadczonych przez nasze warsztaty samochodowe była gwarancją komfortowego i bezawaryjnego dotarcia do punktu docelowego podróży, nawet w przypadku pogorszenia warunków pogodowych. Potwierdzeniem tego jest zadowolenie setki naszych klientów, którzy wybrali usługi Auto Lampy Sosnowiec i zapewnili najlepsze oświetlenie swoim pojazdom. Naszym priorytetem jest indywidualne podejście do klienta i jego problemu – doskonale zdajemy sobie sprawę, że każdy samochód ma unikatowe cechy, dlatego proponujemy rozwiązania, które w pełni zaspokoją nawet najbardziej niekonwencjonalne potrzeby użytkowników dróg.
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
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32 my-16">
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Kilka słów o historii Auto Lampy Sosnowiec
                    </h2>
                    <p class="text-gray-500">
                        Założona w 1993 roku marka Auto Lampy Sosnowiec już od początku swojego istnienia charakteryzowała się rewolucyjnym podejściem do naprawy i renowacji oświetlenia samochodowego. W naszych warsztatach zajmujemy się profesjonalnym odnawianiem lamp samochodowych oraz przywracaniem odbłyśnikom samochodowym ich fabrycznych cech. Ze względu na naturalne zużycie odbłyśniki samochodowe często ulegały awariom, a mniej doświadczone warsztaty lokalne niemal zawsze proponowały wymianę całych reflektorów. Auto Lampy Sosnowiec umożliwia uniknięcie konieczności inwestowania w drogie podzespoły ze względu na oferowany zakres usług, który sprosta oczekiwaniom nawet najbardziej wymagających klientów. Nasza firma, jako jedna z pierwszych, wprowadziła lampy w technologii LED, co znacząco powiększyło zakres możliwości dostosowania oświetlenia samochodu do potrzeb kierowców. Trzy dekady współpracy z klientami decyduje o naszym ogromnym doświadczeniu, które staramy się wykorzystać do świadczenia usług najwyższej jakości. Marka Auto Lampy Sosnowiec posiada również duży wybór elementów własnej produkcji oraz dostęp do jednego z największych w Europie magazynów z częściami zamiennymi.
                    </p>
                </div>
            </div>
        </div>
        <div>
            <img class="rounded-xl" src="{{asset('photo/about2.jpg')}}" alt="Image Description">
        </div>
    </div>
    <!-- End Grid -->
</div>
@include('components.akcent-banner')
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto relative z-10">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32 my-16">
        <div>
            <img class="rounded-xl" src="{{asset('photo/about3.jpg')}}" alt="Image Description">
        </div>
        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                        Priorytety marki Auto Lampy Sosnowiec
                    </h2>
                    <p class="text-gray-500">
                        W naszej codziennej pracy cenimy sobie profesjonalne podejście do klientów, dlatego każdemu nowemu samochodowi w naszym warsztacie poświęcamy maksymalną ilość czasu i uwagi. Współpraca z licznymi klientami w kraju nauczyła nas podejścia do oczekiwań kierowców i poszerzyła horyzonty w kwestii oświetlenia samochodowego. Zdajemy sobie sprawę, że ciągły rozwój jest kluczem do osiągnięcia sukcesu, dlatego jesteśmy otwarci na indywidualne propozycje i wymagania miłośników czterech kółek. Każdy samochód wyjeżdżający z Auto Lampy Sosnowiec będzie nie tylko doskonale widoczny na drodze, ale też może zostać wyposażony w unikalne oświetlenie samochodowe, dzięki któremu zyska na oryginalnym wyglądzie. Wybierz nasze usługi i zainwestuj w jakość reflektorów samochodowych, które posłużą Ci przez wiele lat!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
@endsection