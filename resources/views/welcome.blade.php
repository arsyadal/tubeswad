<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard</title>
</head>

<body class="bg-gray-50">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const courseLink = document.querySelector('a[href="#course"]');
            const courseSection = document.getElementById('course');

            courseLink.addEventListener('click', function (event) {
                event.preventDefault();
                courseSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const courseLink = document.querySelector('a[href="#course"]');
            const courseSection = document.getElementById('course');

            courseLink.addEventListener('click', function (event) {
                event.preventDefault();
                courseSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
    <!-- navbar -->
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('user.index') }}">
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-20">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('user.course')" :active="request()->routeIs('user.course')">
                            {{ __('Course') }}
                        </x-nav-link>
                        <x-nav-link :href="route('user.bootcampEvent')" :active="request()->routeIs('user.bootcampEvent')">
                            {{ __('Event & Bootcamp') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                    @else
                    <div class="flex items-center">
                        <a href="{{ route('register') }}" class="btn btn-active btn-primary mr-5">Daftar</a>
                        <a href="{{ route('login') }}" class="btn btn">Login</a>
                    </div>
                    @endauth
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
                @else
                <div class="flex items-center gap-x-5">
                    <a href="{{ route('register') }}" class="btn btn-active btn-primary mr-5">Daftar</a>
                    <a href="{{ route('login') }}" class="btn">Login</a>
                </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- navbar end -->
    <!-- HERO -->
    <div class="hero min-h-screen bg-gray-100">
        <div class="hero-content flex">
            <div>
                <h1 class="text-5xl font-bold text-gray-700">Solusi Tepat untuk UMKM Hebat</h1>
                <p class="py-6 text-gray-600">Tingkatkan keahlianmu dengan berbagai modul pelatihan UMKM, konsultasi
                    dengan pakar, dan pahami kategori potensi bisnismu melalui penilaian scoring assesment naik kelas.
                </p>
                <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
            </div>
            <img src="{{ asset('assets/img1.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
        </div>
    </div>
    <!-- HERO END -->
    <!-- sponsor -->
    <h1 class="text-center font-bold text-xl mt-4 mb-4 text-gray-700">Didukung Oleh</h1>
    <div class="flex gap-6 justify-center">
        <div class="card w-72 bg-white shadow-xl">
            <figure class="px-10 pt-10">
                <img src="{{ asset('assets/logo telkom.png') }}" alt="Shoes" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center"></div>
        </div>

        <div class="card w-72 bg-white shadow-xl">
            <figure class="px-10 pt-10">
                <img src="{{ asset('assets/logo2.png') }}" alt="Shoes" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <div class="card-actions"></div>
            </div>
        </div>

        <div class="card w-72 bg-white shadow-xl">
            <figure class="px-10 pt-10">
                <img src="{{ asset('assets/logo3.png') }}" alt="Shoes" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center"></div>
        </div>
        <div class="card w-72 bg-white shadow-xl">
            <figure class="px-10 pt-10">
                <img src="{{ asset('assets/logo4.png') }}" alt="umkm" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center"></div>
        </div>
    </div>
    <!-- sponsor end -->

    <!-- kelas -->
    <h1 id="course" class="text-center font-bold text-xl mt-4 mb-4 text-gray-700">Kelas yang tersedia</h1>
    <div class="flex justify-center mt-5 mb-5 ">
        <div class="card w-96 bg-base-100 shadow-xl image-full  mr-5 ml-5">
            <figure><img src="{{ asset('assets/online.jpg') }}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">GoModern</h2>
                <p></p>
                <div class="card-actions justify-end">
                    <a href="{{ route('goModern') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl image-full  mr-5 ml-5">
            <figure><img src="{{ asset('assets/kelass2.jpg') }}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">GoOnline</h2>
                <p></p>
                <div class="card-actions justify-end">
                    <a href="{{ route('goOnline') }}" claas="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl image-full mr-5 ml-5">
            <figure><img src="{{ asset('assets/kelass3.avif') }}" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">GoGlobal</h2>
                <p></p>
                <div class="card-actions justify-end">
                    <a href="{{ route('goGlobal') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- kelas end -->

    <!-- why choose? -->
    <div class="flex justify-center mt-4 mb-4">
        <div class="card lg:card-side bg-white shadow-xl" style="margin-left: 10px; margin-right: 10px;">
            <div class="flex items-center">
                <div class="card-body text-gray-700">
                    <h2 class="card-title">Mengapa pilih LearnUMKM?</h2>
                    <ul>
                        <li>Antarmuka Pengguna yang Ramah.</li>
                        <li>Fokus Pemberdayaan UMKM.</li>
                        <li>Petualangan Pembelajaran yang Kreatif.</li>
                    </ul>
                    <div class="card-actions justify-end">
                    </div>
                </div>
                <figure class="ml-4 mb-3">
                    <img src="{{ asset('assets/oyemike-princewill-VI2X0b01p6g-unsplash.jpg') }}" alt="Album"
                        style="width: 300px; height: 200px;" />
                </figure>
            </div>
        </div>
    </div>


    <!-- why choose end -->

    <!-- kataUMKM -->
    <div class="flex justify-center mt-4 mb-4" style="align-items: center; justify-content: center;">
        <div class="card lg:card-side bg-white shadow-xl w-1/2" style="align-items: center; justify-content: center;">
            <div class="flex items-center"
                style="height: 100%; display: flex; justify-content: center; align-items: center;">
                <div class="card-body text-gray-700">
                    <h2 class="card-title">KataUMKM</h2>
                    <div>
                        <p>"Saya sangat bersyukur bisa menggunakan aplikasi LearnUMKM ini. Sebagai pemilik usaha batik
                            kecil dimana <br>
                            aplikasi ini memberikan solusi lengkap untuk mengelola bisnis saya dengan lebih efisien.
                            Fitur-fitur yang
                            disediakan
                            <br>
                            sangat membantu dalam meningkatkan produktivitas dan daya saing usaha saya."</p>
                    </div>
                    <div class="card-actions justify-end">
                        <p>-Insan Taufik- <br> MACMIDAS</p>
                    </div>
                </div>
                <figure class="mb-3 w-96">
                    <div class="carousel carousel-center max-w-md p-4 space-x-4 bg-neutral rounded-box">
                        <div id="slide1" class="carousel-item relative w-full">
                            <img src="https://daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                class="rounded-box" />
                            <div
                                class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide4" class="btn btn-circle">❮</a>
                                <a href="#slide2" class="btn btn-circle">❯</a>
                            </div>
                        </div>
                        <div id="slide2" class="carousel-item relative w-full">
                            <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg"
                                class="rounded-box" />
                            <div
                                class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide1" class="btn btn-circle">❮</a>
                                <a href="#slide3" class="btn btn-circle">❯</a>
                            </div>
                        </div>

                        <div id="slide3" class="carousel-item relative w-full">
                            <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg"
                                class="rounded-box" />
                            <div
                                class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide2" class="btn btn-circle">❮</a>
                                <a href="#slide4" class="btn btn-circle">❯</a>
                            </div>

                </figure>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- kataUMKM end -->

    <!-- location -->
    <div class="flex justify-center">
        <div class="flex flex-wrap justify-between">
            <div class="card w-96 bg-white shadow-xl mx-2 text-gray-700">
                <div class="card-body">
                    <h2 class="card-title">Bandung</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                    </svg>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
                <figure><img src="{{ asset('assets/Proyek Baru (6).png') }}" alt="Shoes" /></figure>
            </div>
            <div class="card w-96 bg-white shadow-xl mx-2 text-gray-700">
                <div class="card-body">
                    <h2 class="card-title">Jakarta!</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                    </svg>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
                <figure><img src="{{ asset('assets/Proyek Baru (5).png') }}" alt="Shoes" /></figure>
            </div>
            <div class="card w-96 bg-white shadow-xl mx-2 text-gray-700">
                <div class="card-body">
                    <h2 class="card-title">Bekasi!</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                    </svg>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
                <figure><img src="{{ asset('assets/Proyek Baru (4).png') }}" alt="Shoes" /></figure>
            </div>
        </div>
    </div>


    <!-- location end -->

    <!-- event -->
    <div class="flex justify-center mt-6 mb-6">

        <div class="card w-3/4 white shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-gray-700">Event</h2>
                <div class="carousel w-full">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
                            class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide4" class="btn btn-circle">❮</a>
                            <a href="#slide2" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg"
                            class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1" class="btn btn-circle">❮</a>
                            <a href="#slide3" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg"
                            class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2" class="btn btn-circle">❮</a>
                            <a href="#slide4" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide4" class="carousel-item relative w-full">
                        <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg"
                            class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3" class="btn btn-circle">❮</a>
                            <a href="#slide1" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- event end -->
    <!-- footer -->
    <footer class="footer p-10 bg-gray-200 text-gray-700">
        <aside>
            <img src="umkm_logo-removebg-preview.png " alt="" style="width: 50%;">
            <p>LearnUMKM Industries Ltd.<br />Providing reliable tech since 1992</p>
            <p>Alamat:</p>
            <p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University,<br> Sukapura, Kec. Dayeuhkolot,
                Kabupaten Bandung, Jawa Barat 40257
            </p>
        </aside>
        <nav>
            <header class="footer-title">Services</header>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <header class="footer-title">Company</header>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <header class="footer-title">Legal</header>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
    </footer>
</body>

</html>
