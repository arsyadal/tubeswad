<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-[#133256]"> Halo, {{ auth()->user()->name }}!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="flex gap-x-5 text-white mt-5">
                <div class="w-2/6">
                    <div class="bg-[#3257C0] p-5 flex items-center gap-x-5 justify-around shadow-sm rounded-lg">
                        <div>
                            <p class="font-bold text-xl">{{ auth()->user()->courseType }}</p>
                            <p>{{ auth()->user()->namaUMKM }}</p>
                        </div>
                        <div class="radial-progress" style="--value:70;" role="progressbar">70%</div>
                    </div>
                    <div class="bg-white p-5 shadow-sm rounded-lg text-gray-700 mt-5">
                        <h1 class="font-bold text-xl">Timeline</h1>
                        <hr>
                    </div>
                </div>
                <div class="w-4/6">
                    <div class="bg-[#00164E] p-5 shadow-sm rounded-lg">
                        <h1 class="font-bold text-xl">Courses</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="flex items-center w-full bg-[#DCE1FF] rounded-md px-2 mt-2">
                            <input type="text" class="bg-transparent w-full border-0 focus:ring-0 text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="black" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-1 gap-y-3 mt-4">
                            @foreach($course as $data)
                            <div class="card card-side bg-base-100 shadow-xl rounded-2xl">
                                <div class="bg-center bg-contain bg-no-repeat bg-white rounded-l-2xl" style="background-image: url('{{ asset('storage/coursephoto/'. $data->file) }}')">
                                    <img src="https://daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg"
                                        alt="Movie" class="invisible"/>
                                    </div>
                                <div class="card-body bg-white rounded-r-2xl text-gray-700">
                                    <h2 class="card-title">{{ $data->courseName }}</h2>
                                    <p>Pemateri: {{ $data->namaPemateri }}</p>
                                    <p>{{substr($data->deskripsi, 0, 70) . '   ...'}}</p>
                                    <div class="card-actions flex items-center">
                                        <progress class="progress progress-info w-11/12" value="42" max="100"></progress><p class="text-sm font-medium">42%</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
