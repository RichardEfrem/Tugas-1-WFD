<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ronald Bakery</title>
</head>
<body>
    <header class="z-[9999] bg-white bg-opacity-50 fixed top-0 left-0 w-full flex items-center z-10">
        <div class="container mx-auto relative">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="{{ route('home') }}" class="font-bold text-lg text-primary block py-6">
                        RonaldBakery
                    </a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button"
                        class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out  origin-bottom-left "></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 
                    bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block
                    lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="{{ route('home') }}" class="text-base text-secondary 
                                py-2 mx-8 group-hover:text-primary flex">
                                    Home
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('product') }}" class="text-base text-secondary 
                                py-2 mx-8 group-hover:text-primary flex">
                                    Produk Kami
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('pemesanan') }}" class="text-base text-secondary 
                                py-2 mx-8 group-hover:text-primary flex">
                                    Pemesanan
                                </a>
                            </li>
                            <li class="group">
                                <a href="{{ route('testimoni') }}" class="text-base text-secondary 
                                py-2 mx-8 group-hover:text-primary flex">
                                    Testimoni
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
