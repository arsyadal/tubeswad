<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="navbar justify-between bg-white">
        <div>
            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-20">
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#" class="mr-10 text-gray-700">Home</a></li>
                <li><a href="#course" class="mr-10 text-gray-700">Course</a></li>
                <li><a href="#" class="mr-10 text-gray-700">Event & Bootcamp</a></li>
            </ul>
        </div>
        <div class="">
            <a href="{{ route('register') }}" class="btn btn-active btn-primary mr-5 text-white">Daftar</a>
            <a href="{{ route('login') }}" class="btn btn">Login</a>
        </div>
    </div>
    <!-- navbar end -->

    <!-- kelas -->
    <h1 id="course" class="text-center font-bold text-xl mt-4 mb-4 text-gray-700">Berbagai Program yang Tersedia</h1>
    <div class="flex gap-x-5 px-10">
        <div class="border-2 rounded-lg p-5 w-2/12 h-32 text-gray-700">
            <ul>
                <li><a href="{{ route('goOnline') }}">GoOnline</a></li>
                <li><a href="{{ route('goModern') }}">GoModern</a></li>
                <li class="font-bold"><a href="{{ route('goGlobal') }}">GoGlobal</a></li>
            </ul>
        </div>
        <div class="card w-10/12 bg-base-100 shadow-xl image-full mr-5 ml-5 h-64 bg-center bg-cover bg-no-repeat" style="background-image: url('{{ asset('assets/kelass3.avif') }}')">
            <figure><img src="{{ asset('assets/online.jpg') }}" alt="Shoes" class="invisible" /></figure>
        </div>
    </div>
    <div class="flex justify-end p-10 ml-14">
        <div class="card w-10/12 bg-[#133256] shadow-xl image-full  mr-5 ml-5">
            <div class="card-body bg-[#133256] rounded-xl text-white">
                <h2 class="card-title text-white">Go Global</h2>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur nunc at diam pulvinar dictum.</p>
                <ul class="list-disc pl-5 text-white">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>
                <div class="card-actions justify-end">
                    <a href="{{ route('register') }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- kelas end -->

    <!-- footer -->
    <footer class="footer p-10 bg-[#133256] text-base-content text-white">
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
