<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AddCourse</title>
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
        <a href="dashboard.html">
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
                  <img alt="Tailwind CSS Navbar component" src="sincahn.jpg" />
                </div>
              </label>
              <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li>
                  <a class="justify-between"> Profile </a>
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
    <div class="text-sm breadcrumbs ml-16">
      <ul>
        <li><a>Home</a></li>
        <li><a>Question</a></li>
        <li>Edit Values</li>
      </ul>
    </div>
    <!-- end breadcrumbs -->
    <h1 class="font-bold text-3xl ml-16">Tambah Course</h1>
</h>
    <!-- card -->
          <div class="w-3/4 shadow-2xl bg-base-100 mx-auto" style="background-color:#133256">
            <form class="card-body">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Tambahkan Nilai Form Pertama</span>
                </label>
                <input type="Nilai Pertama" placeholder="Nilai Pertama" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Nama Pemateri</span>
                </label>
                <input type="email" placeholder="email" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Deskripsi Course</span>
                </label>
                <input type="email" placeholder="email" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Pilihan GoModern/GoOnline/GoDigital </span>
                </label>
                <input type="email" placeholder="email" class="input input-bordered" required />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Masukkan Sertifikat </span>
                </label>
                <input type="email" placeholder="email" class="input input-bordered" required />
              </div>
            
              <div class="flex items-center mt-6 justify-center gap-4">
                <button class="btn btn-outline btn-warning">Cancel</button>
                <button class="btn btn-warning">Save</button>

              </div>
            </form>
          </div>
        </div>
      </div>



    <!-- end card -->
  </body>
</html>