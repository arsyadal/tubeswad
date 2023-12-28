<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <div class="flex justify-between items-center">

            <div class="flex items-center font-bold text-xl">
                <p>{{ $course->courseName }} · </p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFB961" viewBox="0 0 24 24" stroke-width="0"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <p>4.7</p>
            </div>
            <a href="" class="btn bg-[#AC8039] border-0 text-white">Edit</a>
        </div>
        <div class="bg-white rounded-md w-full mt-5">
            <div class="w-full h-44 bg-center bg-contain bg-no-repeat"
                style="background-image: url('{{ asset('storage/coursephoto/'. $course->file) }}')"></div>
        </div>
        <div class="mt-5 border rounded-md flex items-center justify-around bg-white p-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <div class="w-3/4">
                <h1 class="text-lg font-semibold">{{ $course->namaPemateri }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur nunc at diam pulvinar
                    dictum. Ut hendrerit, lorem ac auctor tristique.</p>
            </div>
        </div>
        <div class="flex justify-center mt-5">
            <label for="sertifikatModal" class="mx-auto btn bg-[#AC8039] text-white border-0">Lihat Sertikat</label>
            <!-- Sertifikat Modal -->
            <input type="checkbox" id="sertifikatModal" class="modal-toggle" />
            <div class="modal" role="dialog">
                <div class="modal-box bg-white">
                    <img src="{{ asset('storage/sertifikatcourse/' . $course->sertifikat) }}" alt="Sertifikat">
                </div>
                <label class="modal-backdrop" for="sertifikatModal">Close</label>
            </div>
        </div>
        <div class="mt-5 text-center font-semibold">
            {{ $course->deskripsi }}
        </div>
        <div class="grid grid-cols-1">

        </div>
    </div>
</x-app-layout>
