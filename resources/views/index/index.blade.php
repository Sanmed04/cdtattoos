@extends('layouts.base')
@section('title', 'Cristian Duarte')
@section('content')


    <section class="mt-8">
        <div class="w-full flex items-center justify-center">
            <div class="bg-[#090A0B] rounded-full max-w-[400px] lg:max-w-[820px]">
                <img class="w-full aspect-square" src="{{ asset('images/cristianCara.png') }}" alt="">

            </div>

        </div>
    </section>

    <section class="flex items-center justify-center mb-10 w-full">

        @include('components.card-index', [
            'title' => 'Mis trabajos',
            'imageUrl' => 'https://picsum.photos/800/800',
        ])

        @include('components.card-index', [
            'title' => 'Contacto',
            'imageUrl' => 'https://picsum.photos/900/900',
        ])

        @include('components.card-index', [
            'title' => 'Sobre Mi',
            'imageUrl' => 'https://picsum.photos/700/700',
        ])

    </section>





    <section class="container lg:grid-cols-2 flex mx-auto my-40 gap-20">
        <div class="w-1/2">
            <h2 class="text-5xl mb-6 font-bold">Lorem Ipsum Dolor</h2>
            <p class="text-3xl tracking-wide leading-relaxed">Un tatuaje es una forma de modificación corporal, la cual
                consiste en alterar de manera temporal o permanente el color de la piel, sobre la cual se plasma un dibujo,
                un patrón, una figura, composición o un texto, el cual se plasma con agujas u otros utensilios que inyectan
                tinta o algún otro pigmento en la dermis de una persona.</p>
        </div>
        <div class="w-1/2">
            <h2 class="text-5xl mb-6 font-bold">Lorem Ipsum Dolor</h2>
            <p class="text-3xl tracking-wide leading-relaxed">Shui Hu Zhuan es una novela china que se tradujo al japonés
                ("Suikoden") en el siglo XVII. Este libro renovó el interés en el tatuaje, e hizo de él una forma popular de
                decoración y de coleccionismo.</p>
        </div>
    </section>

    <section class="">
        <h2 class="text-6xl text-center">Sponsors</h2>
        <div class="flex parallelogram items-center justify-center gap-32 text-black text-3xl">

            <a href="https://www.instagram.com/morsa_tattoomachines/">
                <img class="w-[250px] h-[250px]" src="{{ asset('images/morsa.png') }}" alt="Morsa Tattoos">
                <p class="text-center mt-2">MRS Tattoo Machines</p>
            </a>
            <a href="https://www.instagram.com/drakkar_world_ink/">
                <img class="w-[250px] h-[250px]" src="{{ asset('images/marca2.png') }}" alt="Drakkar Ink">
                <p class="text-center mt-2">Drakkar World Ink</p>
            </a>
        </div>

    </section>
@endsection

<style>
    .group:hover .group-hover\:scale-110 {
        transform: scale(1.1);
    }

    .group:hover .group-hover\:opacity-50 {
        opacity: 0.5;
    }
</style>
