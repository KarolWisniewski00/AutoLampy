@extends('layouts.guest')
@section('content')
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-12 md:pt-20 md:pb-24 -mt-2">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-3xl text-gray-800">
            Kompleksowe usługi w <span class="text-carrot-500">Auto Lampy</span>
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
                    Usługi
                </li>
            </ol>
        </div>
        <p class="text-gray-500 mt-2">
            Auto Lampy to firma, która funkcjonuje na rynku od 1993 roku. Odkąd istniejemy, naszej pracy przyświeca przede wszystkim idea świadczenia usług jak najwyższe jakości. Dowodem na to są liczne nagrody branżowe, jakie zdobyliśmy przez lata funkcjonowania. Mimo wszystko jednak największą motywacją do działania jest zadowolenie naszych klientów z profesjonalnie wykonanej usługi. Zapraszamy do zapoznania się z szeroką gamą naszych usług.
        </p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    @include('components.service')
    <!-- End Grid -->
</div>
@endsection