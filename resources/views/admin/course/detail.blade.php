<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold">List Course {{ $courseCategory->name }}</h1>
            <a href="{{ route('admin.course.create', $courseCategory->id) }}" class="btn flex items-center gap-x-2">
                <p>Create Modul</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-3 gap-5 mt-5">
            @foreach($course as $data)
            <div class="card bg-base-100 shadow-xl">
                <div class="bg-center bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/coursephoto/'. $data->file) }}')">
                    <img src="{{ asset('assets/Proyek Baru (4).png') }}" alt="Shoes" class="invisible"/>
                </div>
                <div class="card-body bg-white text-gray rounded-b-2xl">
                    <h2 class="card-title">{{ $data->courseName }}</h2>
                    <p>{{substr($data->deskripsi, 0, 70) . '   ...'}}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('admin.course.detailCourse', $data->id) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
