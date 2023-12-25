<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
  </head>
  <body>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const courseLink = document.querySelector('a[href="#course"]');
        const courseSection = document.getElementById('course');
  
        courseLink.addEventListener('click', function(event) {
          event.preventDefault();
          courseSection.scrollIntoView({ behavior: 'smooth' });
        });
      });
    </script>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const courseLink = document.querySelector('a[href="#course"]');
            const courseSection = document.getElementById('course');
      
            courseLink.addEventListener('click', function(event) {
              event.preventDefault();
              courseSection.scrollIntoView({ behavior: 'smooth' });
            });
          });
        </script>
    <!-- navbar -->

    <div class="navbar bg-base-100">
        <div class="navbar-start">
        <div class="dropdown">
          <label tabindex="0" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Item 1</a></li>
            <li>
              <a>Parent</a>
              <ul class="p-2">
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
              </ul>
            </li>
            <li><a>Item 3</a></li>
          </ul>
        </div>
        <img src="umkm logo.png" alt="LearnUMKM" class="btn btn-ghost text-xl text-primary h-10 w-200" />
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="#" class="mr-10">Home</a></li>
          <li><a href="#course" class="mr-10">Course</a></li>
          <li><a href="#" class="mr-10">Event & Bootcamp</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <a href="register" class="btn btn-active btn-primary mr-5">Daftar</a>
        <a href="login" class="btn btn">Login</a>
      </div>
    </div>
    <!-- navbar end -->
    <!-- HERO -->
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <img src="img1.jpg" class="max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">Solusi Tepat untuk UMKM Hebat!</h1>
          <p class="py-6">Tingkatkan keahlianmu dengan berbagai modul pelatihan UMKM, konsultasi dengan pakar, dan pahami kategori potensi bisnismu melalui penilaian scoring assesment naik kelas.</p>
          <a href="#course" class="btn btn-primary">Daftar Sekarang</a>
        </div>
      </div>
    </div>
    <!-- HERO END -->
    <!-- sponsor -->
    <h1 class="text-center font-bold text-xl mt-4 mb-4">Didukung Oleh</h1>
    <div class="flex gap-6 justify-center">
      <div class="card w-72 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="logo telkom.png" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center"></div>
      </div>

      <div class="card w-72 bg-base-100 shadow-xl"> 
        <figure class="px-10 pt-10">
          <img src="logo2.png" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <div class="card-actions"></div>
        </div>
      </div>

      <div class="card w-72 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="logo3.png" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center"></div>
      </div>
      <div class="card w-72 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="logo4.png" alt="umkm" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center"></div>
      </div>
    </div>
    </div>
    <!-- sponsor end -->

    <!-- kelas -->
    <h1 id="course" class="text-center font-bold text-xl mt-4 mb-4">Kelas yang tersedia</h1>
      <div class="flex justify-center mt-5 mb-5 ">
        <div class="card w-96 bg-base-100 shadow-xl image-full  mr-5 ml-5">
          <figure><img src="online.jpg" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">GoModern</h2>
            <p></p>
            <div class="card-actions justify-end">
              <a href="userr.html" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl image-full  mr-5 ml-5">
          <figure><img src="kelass2.jpg" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">GoOnline</h2>
            <p></p>
            <div class="card-actions justify-end">
              <a class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl image-full mr-5 ml-5">
          <figure><img src="kelass3.avif" alt="Shoes" /></figure>
          <div class="card-body">
            <h2 class="card-title">GoDigitalisasi</h2>
            <p></p>
            <div class="card-actions justify-end">
              <a class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      
    <!-- kelas end -->

    <!-- why choose? -->
    <div class="flex justify-center mt-4 mb-4">
        <div class="card lg:card-side bg-base-100 shadow-xl" style="margin-left: 10px; margin-right: 10px;">
          <div class="flex items-center">
            <div class="card-body">
              <h2 class="card-title">Mengapa pilih LearnUMKM?</h2>
              <ul>
                <li>Antarmuka Pengguna yang Ramah.</li>
                <li>Fokus Pemberdayaan UMKM.</li>
                <li>etualangan Pembelajaran yang Kreatif.</li>
              </ul>
              <div class="card-actions justify-end">
              </div>
            </div>
            <figure class="ml-4 mb-3">
              <img src="oyemike-princewill-VI2X0b01p6g-unsplash.jpg" alt="Album" style="width: 300px; height: 200px;" />
            </figure>
          </div>
        </div>
      </div>
      
      
    <!-- why choose end -->

    <!-- kataUMKM -->
    <div class="flex justify-center mt-4 mb-4" style="align-items: center; justify-content: center;">
      <div class="card lg:card-side bg-base-100 shadow-xl w-1/2" style="align-items: center; justify-content: center;">
        <div class="flex items-center" style="height: 100%; display: flex; justify-content: center; align-items: center;">
          <div class="card-body">
            <h2 class="card-title">KataUMKM</h2>
            <div>
              <p>"Saya sangat bersyukur bisa menggunakan aplikasi LearnUMKM ini. Sebagai pemilik usaha batik kecil dimana, 
                aplikasi ini memberikan solusi lengkap untuk mengelola bisnis saya dengan lebih efisien. Fitur-fitur yang disediakan 
                sangat membantu dalam meningkatkan produktivitas dan daya saing usaha saya."</p>
            </div>
         
      
            <div class="card-actions justify-end">
              <p>-Insan Taufik- <br> MACMIDAS</p>
            </div>
          </div>
          <figure class="mb-3 w-96">
            <div class="carousel carousel-center max-w-md p-4 space-x-4 bg-neutral rounded-box">
              <div id="dashboard" class="carousel-item relative w-full">
                <img src="https://daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg" class="rounded-box" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                  <a href="#slide4" class="btn btn-circle">❮</a> 
                  <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
              </div> 
              <div id="slide2" class="carousel-item relative w-full">
                <img src="https://daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg" class="rounded-box" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                  <a href="#dashboard" class="btn btn-circle">❮</a> 
                  <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
              </div> 
        
              <div id="slide3" class="carousel-item relative w-full">
                <img src="https://daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg" class="rounded-box" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
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
        <div class="card w-96 bg-base-100 shadow-xl mx-2">
          <div class="card-body">
            <h2 class="card-title">Bandung</h2>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
            <p>Jl. Soekarno Hatta</p>
          </div>
          <figure><img src="Proyek Baru (6).png" alt="Shoes" /></figure>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl mx-2">
          <div class="card-body">
            <h2 class="card-title">Jakarta!</h2>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
            <p>Jl. Soekarno Hatta, Karawang Timur</p>
          </div>
          <figure><img src="Proyek Baru (5).png" alt="Shoes" /></figure>
        </div>
        <div class="card w-96 bg-base-100 shadow-xl mx-2">
          <div class="card-body">
            <h2 class="card-title">Bekasi!</h2>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
            <p>Jl. Soekarno Hatta, Bekasi Barat</p>
          </div>
          <figure><img src="Proyek Baru (4).png" alt="Shoes" /></figure>
        </div>
      </div>
    </div>
    
    
    <!-- location end -->

    <!-- event -->
    <div class="flex justify-center mt-6 mb-6">

    <div class="card w-3/4 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">Event</h2>
          <div class="carousel w-full">
            <div id="dashboard" class="carousel-item relative w-full">
              <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
              <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide4" class="btn btn-circle">❮</a> 
                <a href="#slide2" class="btn btn-circle">❯</a>
              </div>
            </div> 
            <div id="slide2" class="carousel-item relative w-full">
              <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full" />
              <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#dashboard" class="btn btn-circle">❮</a> 
                <a href="#slide3" class="btn btn-circle">❯</a>
              </div>
            </div> 
            <div id="slide3" class="carousel-item relative w-full">
              <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
              <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide2" class="btn btn-circle">❮</a> 
                <a href="#slide4" class="btn btn-circle">❯</a>
              </div>
            </div> 
            <div id="slide4" class="carousel-item relative w-full">
              <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
              <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide3" class="btn btn-circle">❮</a> 
                <a href="#dashboard" class="btn btn-circle">❯</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- event end -->
    <!-- footer -->
    <footer class="footer p-10 bg-base-200 text-base-content">
      <aside>
        <img src="umkm_logo-removebg-preview.png " alt="" style="width: 50%;">
        <p>LearnUMKM Industries Ltd.<br/>Providing reliable tech since 1992</p>
        <p>Alamat:</p>
        <p>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University,<br> Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257
        </p>
      </aside> 
      <nav>
        <header class="footer-title">Services</header> 
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
      </nav> 
      <nav>
        <header class="footer-title">Company</header> 
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
      </nav> 
      <nav>
        <header class="footer-title">Legal</header> 
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
        <a class="link link-hover"></a>
      </nav>
    </footer>
  </body>
</html>
