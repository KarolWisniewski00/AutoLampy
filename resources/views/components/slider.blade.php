<!--SLIDER-->
<script src="{{asset('js/slider.js')}}"></script>
<div class="sliderAx p-0 m-0 h-auto">
    <div id="slider-1" class="container-fuild mx-auto" style="height: 80vh;">
        <div class="bg-cover bg-center h-full text-white py-24 px-10 object-fill" style="background-image: url({{asset('photo/bg-5.jpg')}})">
            <div class="container mx-auto h-full">
                <div class="grid grid-cols-5 grid-rows-5 gap-4 h-full">
                    <div class="col-span-3 row-span-2 col-start-2 row-start-4">
                        <div class="flex flex-col items-center justify-center h-full text-center">
                        <p class="font-bold text-sm uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent">Auto Lampy</p>
                            <p class="text-3xl font-bold">Przeróbka na BI-LED</p>
                            <p class="text-2xl mb-10 leading-none">Ulepsz swój samochód i zyskaj lepszą widoczność</p>
                            <a href="tel:+48791066550" class="inline-flex items-center p-2  justify-center text-sm text-white bg-carrot-500 hover:bg-carrot-600 focus:ring-4 focus:outline-none focus:ring-carrot-300 font-medium rounded-lg text-sm px-4 py-2 text-center"><i class="fa-solid fa-phone mr-2"></i>Zadzwoń</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="slider-2" class="container-fuild mx-auto" style="height: 80vh;">
        <div class="bg-cover bg-top h-full text-white py-24 px-10 object-fill" style="background-image: url({{asset('photo/bg-6.jpg')}})">
            <div class="container mx-auto h-full">
                <div class="grid grid-cols-5 grid-rows-5 gap-4 h-full">
                    <div class="col-span-3 row-span-2 col-start-2 row-start-4">
                        <div class="flex flex-col items-center justify-center h-full text-center">
                            <p class="font-bold text-sm uppercase bg-clip-text bg-gradient-to-l from-carrot-400 to-carrot-600 text-transparent">Auto Lampy</p>
                            <p class="text-3xl font-bold mb-10">Pełna regeneracja</p>
                            <a href="{{route('service')}}" class="inline-flex items-center p-2 justify-center text-sm text-white bg-carrot-500 hover:bg-carrot-600 focus:ring-4 focus:outline-none focus:ring-carrot-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Dowiedz się wiecej</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>