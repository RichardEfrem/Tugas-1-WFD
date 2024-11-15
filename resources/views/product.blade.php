{{-- Menggunakan base layout base.blade.php --}}
@extends('base.base')
{{-- Section content -> yield content base.blade --}}
@section('content')

<section id="product" class="w-full pt-36 pb-16 bg-orange-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">PRODUK KAMI</h4>
                <h2 class="font-bold text-bolderPrim text-3xl mb-4">Varian Roti yang Kami Tawarkan</h2>
                <p>Dibuat dengan resep jadul yang autentik dan tanpa pengawet untuk menjaga kualitas dan kepercayaan dari para pelanggan.
                    Setiap bahan yang digunakan dipastikan kualitas dan kebersihannya untuk menghasilkan roti dengan tekstur dan cita rasa terbaik. 
                </p>
            </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/bajulkc.jpeg') }}" alt="bajul"
                    width="w-full">
                </div>
                <h3 class="font-bold text-xl text-bolderPrim mt-5 mb-3">
                    Roti Bajul
                </h3>
                <p class="font-medium text-base text-secondary">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Fugit amet vitae sapiente, 
                    assumenda maiores a?
                </p>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/kenongan.jpeg') }}" alt="kenongan"
                    width="w-full">
                </div>
                <h3 class="font-bold text-xl text-bolderPrim mt-5 mb-3">
                    Roti Kenongan
                </h3>
                <p class="font-medium text-base text-secondary">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Fugit amet vitae sapiente, 
                    assumenda maiores a?
                </p>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/ChickenPie.jpeg') }}" alt="pie"
                    width="w-full">
                </div>
                <h3 class="font-bold text-xl text-bolderPrim mt-5 mb-3">
                    Chicken Pie
                </h3>
                <p class="font-medium text-base text-secondary">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Fugit amet vitae sapiente, 
                    assumenda maiores a?
                </p>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/pasteltutup.jpeg') }}" alt="pasteltutup"
                    width="w-full">
                </div>
                <h3 class="font-bold text-xl text-bolderPrim mt-5 mb-3">
                    Pastel Tutup
                </h3>
                <p class="font-medium text-base text-secondary">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Fugit amet vitae sapiente, 
                    assumenda maiores a?
                </p>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/rotipotong.jpeg') }}" alt="rotipotong"
                    width="w-full">
                </div>
                <h3 class="font-bold text-xl text-bolderPrim mt-5 mb-3">
                    Roti Potong
                </h3>
                <p class="font-medium text-base text-secondary">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Fugit amet vitae sapiente, 
                    assumenda maiores a?
                </p>
            </div>

            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="{{ asset('image/cumcum.jpeg') }}" alt="cumcum"
                    width="w-full">
                </div>
                <h3 class="font-bold text-xl text-bolderPrim mt-5 mb-3">
                    Kue Cum Cum
                </h3>
                <p class="font-medium text-base text-secondary">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Fugit amet vitae sapiente, 
                    assumenda maiores a?
                </p>
            </div>
        </div>
    </div>
</section>

@endsection