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
                        W Auto Lampy zajmujemy się głównie wykonywaniem napraw lamp
                        samochodowych oraz ich modyfikacją. Nasi specjaliści posiadają
                        odpowiednie doświadczenie oraz wiedzę, aby zająć się odnową twoich
                        reflektorów oraz ich ulepszeniem i modyfikacją lub przystosowaniem
                        oświetlenia samochodowego pojazdów sprowadzonych do wymogów i
                        standardów europejskich. Jesteśmy autoryzowanym partnerem sieci Auto
                        Gamma, lidera w branży usług i części związanych z oświetleniem
                        samochodowym.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4 md:mt-0 gsap">
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
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4 gsap">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-star w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Wielu zadowolonych klientow</span></span>
                </div>
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4 gsap">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-person-circle-check w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Wykwalifikowani pracownicy</span></span>
                </div>
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4 gsap">
                    <span class="uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent"><i class="fa-solid fa-money-bill-1-wave w-1/4"></i></span>
                    <span class="w-3/4 font-bold text-xs md:text-2xl text-center"><span>Rozsądna cena</span></span>
                </div>
                <div class="flex text-3xl md:text-5xl justify-center items-center my-4 gsap">
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
                        W Auto Lampy Sosnowiec zawsze na pierwszym miejscu stawiamy na
                        twoje oczekiwania i potrzeby. Do każdego zlecenia podchodzimy
                        indywidualnie, aby uzyskane efekty były jak najlepsze. W naszym serwisie
                        zatrudniamy jedynie wykwalifikowane i doświadczone osoby. Na wszystkie
                        wykonywane przez nas usługi otrzymasz gwarancję. Stale podążamy za
                        najnowszymi trendami na rynku inwestując w nowe maszyny, urządzenia
                        oraz szkolenia. Dzięki temu możemy wykorzystywać w swojej pracy
                        najlepsze dostępne na rynku rozwiązania. W efekcie tego zawsze
                        otrzymasz wysokiej jakości usługi oraz produkty, które często odmienią
                        całkowicie twój samochód na lepszy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features -->
<!--BANNER-->
<div class="bg-gradient-to-r from-carrot-600 to-carrot-400">
    <div class="grid grid-cols-1 md:grid-cols-3 items-center">
        <div class="my-0 md:my-4 w-full">
            <div class="bg-cover bg-center h-full text-white py-72 px-10 object-fill" style="background-image: url({{asset('photo/before.jpg')}})">

            </div>
        </div>
        <div class="my-0 md:my-4 w-full">
            <div class="bg-cover bg-center h-full text-white py-72 px-10 object-fill" style="background-image: url({{asset('photo/center.jpg')}})">

            </div>
        </div>
        <div class="my-0 md:my-4 w-full">
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
            Auto Lampy to nowoczesna firma, która funkcjonuje na rynku w ramach
            renomowanej sieci Auto Gamma. Odkąd istniejemy, naszej pracy
            przyświeca przede wszystkim idea świadczenia usług na jak najwyższym
            poziomie. Dowodem na to są liczne nagrody branżowe, jakie zdobyliśmy
            przez lata funkcjonowania. Największą naszą motywacją do działania jest
            jednak zadowolenie naszych klientów. Zapraszamy do zapoznania się z
            szeroką gamą naszych usług.
        </p>
    </div>
    @include('components.service')
    <div class="py-10 lg:py-14 mx-auto">
        <div class="min-h-[35vh] bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[75vh]" style="background-image: url({{asset('photo/golf.jpg')}});">
            <div class="absolute bottom-0 start-0 end-0 max-w-xs text-center mx-auto p-6 md:start-auto md:text-start md:mx-0">

                <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7">
                    <div class="hidden md:block">
                        <h3 class="text-lg font-bold text-gray-800 sm:text-2xl">Regeneracja i Naprawa</h3>
                        <p class="mt-2 text-gray-800">Przywróć swoim lampom blask i bezpieczeństwo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    //SCROLL TRIGGER
    gsap.registerPlugin(ScrollTrigger);

    function st(string) {
        const elements = document.querySelectorAll(string);
        elements.forEach(element => {
            gsap.fromTo(element.children, {
                opacity: 0,
                y: 100,
                scale: 0.8
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: element,
                    start: 'top 50%',
                    end: 'top 50%',
                }
            });
        });
    };

    st('.gsap');

</script>
@endsection