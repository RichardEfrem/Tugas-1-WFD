{{-- Menggunakan base layout base.blade.php --}}
@extends('base.base')
{{-- Section content -> yield content base.blade --}}
@section('content')

<section id="product" class="w-full pt-36 pb-16 bg-yellow-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">TESTIMONI</h4>
                <h2 class="font-bold text-bolderPrim text-3xl mb-4">Testimoni dari beberapa pelanggan kami yang puas dengan Ronald Bakery</h2>
            </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/testi1.jpeg') }}" alt="bajul"
                    width="w-full">
                </div>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/testi2.jpeg') }}" alt="kenongan"
                    width="w-full">
                </div>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/testi3.jpeg') }}" alt="pie"
                    width="w-full">
                </div>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/testi4.jpeg') }}" alt="pasteltutup"
                    width="w-full">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection