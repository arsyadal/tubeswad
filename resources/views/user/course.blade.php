<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-xl font-bold text-gray-700">List Course of {{ auth()->user()->courseType }}</h1>
            <div class="grid grid-cols-2 gap-x-3 mt-4">
                @foreach($course as $data)
                <a href="{{ route('user.courseModul', $data->id) }}">
                    <div class="card card-side bg-base-100 shadow-xl rounded-2xl">
                        <div class="bg-center bg-contain bg-no-repeat bg-white rounded-l-2xl"
                            style="background-image: url('{{ asset('storage/coursephoto/'. $data->file) }}')">
                            <img src="https://daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie"
                                class="invisible" />
                        </div>
                        <div class="card-body bg-white rounded-r-2xl text-gray-700">
                            <h2 class="card-title">{{ $data->courseName }}</h2>
                            <p>Pemateri: {{ $data->namaPemateri }}</p>
                            <p>{{substr($data->deskripsi, 0, 70) . '   ...'}}</p>
                            <div class="card-actions flex items-center justify-between">
                                <progress class="progress progress-info w-10/12" value="{{ $data->progress }}" max="100"></progress>
                                <p class="text-sm font-medium w-1/12">{{ $data->progress }}%</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
