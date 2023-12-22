<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Course</title>
  </head>
<body>
    <!-- navbar -->
    <div class="navbar bg-base-100">
      <div class="navbar-start">
        <div class="dropdown">
          <label tabindex="0" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a>Home</a></li>
            <li>
              <a>Course</a>
            </li>
            <li><a>News</a></li>
          </ul>
        </div>
        <a href="course.php">
          <img src="umkm logo.png" alt="LearnUMKM" class="btn btn-ghost text-xl text-primary h-10 w-200" />
        </a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="#" class="mr-10">Home</a></li>
          <li><a href="#" class="mr-10">Course</a></li>
          <li><a href="#course" class="mr-10">News</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <div class="flex-none gap-2">
          <div class="flex items-center">
            <div class="dropdown dropdown-end">
              <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                  <img alt="Tailwind CSS Navbar component" src="marketing.jpg" />
                </div>
              </label>
              <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li>
                  <a href="editprofile.php" class="justify-between"> Profile </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar end -->


    <!-- breadcrumbs -->
<h1 class="font-bold text-3xl ml-10">Marketing and Sales</h1>
<div class="text-sm breadcrumbs ml-10">
  <ul>
    <li><a>Home</a></li> 
    <li><a>Go Modern</a></li> 
    <li class="link link-primary">Courses</li>

  </ul>
</div>
<!-- breadcrumbs end -->
    <!--  carousel-->
    <div class="carousel w-full mb-3">
        <div id="item1" class="carousel-item w-full justify-center">
          <img src="marketing2.png" class="w-full  mr-10 ml-10" style="height: 200px;" width=""/>
        </div> 
      </div> 
      <div class="flex justify-center w-full py-2 gap-2">
      </div>
    </div>
</div>
    <!-- carousel end -->
<!-- badge -->

<div class="badge badge-info gap-2 ml-10 mr-5 mb-3" style="color: #133256;">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-video" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" /><path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /></svg>
  5 Video
</div>
<div class="badge badge-info gap-2 mr-5">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
  700+ Peserta
</div>
<div class="badge badge-info gap-2 mr-5">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>  5 Modul
</div>
<!-- badge end -->
    <!-- pemateri -->
    <div class="card w-flex bg-base-100 shadow-xl ml-10 mr-10">
      <div class="card-body">
        <h2 class="card-title ">Marketing Introduction</h2>
        <p>Ryan Dwana - Business Director at Initiative - Global Media Agency
Dalam materi ini, kita akan mempelajari dasar pengetahuan mengenai marketing dan analisa unsur yang memengaruhinya. Kita juga akan mempelajari dasar-dasar marketing mix dan cara memulai marketing sehingga dapat membantu kita dalam melakukan eksekusi marketing yang dapat menghasilkan keuntungan. Kemudian, kita akan mempelajari unsur-unsur yang memengaruhi marketing dan analisa SWOT sehingga kita dapat meningkatkan efektifitas pemasaran.</p>
      
      </div>
    </div>
    <!-- pemateri end -->
    <!-- progres sertifikat -->
    <!--progress class="progress progress-primary w-3/4 mr-5 ml-10 mr-1" value="70" max="100"></progress>
    <a href="" class="btn btn-primary mt-3">Unduh Sertifikat</a-->


    <!-- end -->

    <!--p class="ml-10 mr-10">Selamat! Kamu sudah menyelesaikan materi ini, klik tombol dibawah untuk mendapatkan sertifkatmu!</p-->

    <!--  modul 1 -->
    <div class="card w-flex bg-base-100 shadow-xl ml-10 mr-10 mb-10">
      <div class="card-body">
        <h2 class="card-title">Modul 1</h2>
        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-presentation-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 12v-4" /><path d="M15 12v-2" /><path d="M12 12v-1" /><path d="M3 4h18" /><path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" /><path d="M12 16v4" /><path d="M9 20h6" /></svg>
          </div>
          
          <a href="#" class="ml-2">Presentation Materi - Modul 1</a>
          <div class="form-control flex items-center justify-end">

            <div class="flex items-center justify-">
              
            </div>
           
          </div>
          
        </div>

        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 7l1 0" /><path d="M9 13l6 0" /><path d="M13 17l2 0" /></svg>          </div>
          <a href="#" class="ml-2"> Materi - Modul 1</a>
          <div class="form-control">
            
          </div>
          
        </div>
                  


        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" /><path d="M9 7l6 0" /><path d="M9 11l6 0" /><path d="M9 15l4 0" /></svg>
          </div>
          <a href="" class="ml-2">        Post Test - Modul 1 
          </a>
          <div class="form-control">
            
          </div>
          
        </div>

        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-video" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" /><path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /></svg>
          </div>
          <a href="videocourse.php" class="ml-2">Video - Modul 1</a>
          <div class="form-control">
            
          </div>
          
        </div>
      </div>
    </div>
    <!-- modul end -->

 
    <!--  modul 2 -->
    <div class="card w-flex bg-base-100 shadow-xl ml-10 mr-10 mb-10">
      <div class="card-body">
        <h2 class="card-title">Modul 1</h2>
        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-presentation-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 12v-4" /><path d="M15 12v-2" /><path d="M12 12v-1" /><path d="M3 4h18" /><path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" /><path d="M12 16v4" /><path d="M9 20h6" /></svg>
          </div>
          
          <a href="#" class="ml-2">Presentation Materi - Modul 2</a>
          <div class="form-control flex items-center justify-end">

            <div class="flex items-center justify-">
              
            </div>
           
          </div>
          
        </div>

        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 7l1 0" /><path d="M9 13l6 0" /><path d="M13 17l2 0" /></svg>          </div>
          <a href="#" class="ml-2"> Materi - Modul 2</a>
          <div class="form-control">
            
          </div>
          
        </div>
                  


        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" /><path d="M9 7l6 0" /><path d="M9 11l6 0" /><path d="M9 15l4 0" /></svg>
          </div>
          <a href="" class="ml-2">        Post Test - Modul 2 
          </a>
          <div class="form-control">
            
          </div>
          
        </div>

        <div class="flex ml-4">
          <div class="rounded-full h-8 w-8 bg-base-200 flex items-center justify-center">
            <!-- Icon di sini -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-video" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" /><path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" /></svg>
          </div>
          <a href="videocourse.php" class="ml-2">Video - Modul 2</a>
          <div class="form-control">
            
          </div>
          
        </div>
      </div>
    </div>
        <!-- MODUL 2 END -->

</body>
</html>