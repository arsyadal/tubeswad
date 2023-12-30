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
            <div>
                <a href="{{ route('admin.modul.create', $course->id) }}"
                    class="btn bg-[#AC8039] border-0 text-white">Tambah Modul</a>
                <a href="{{ route('admin.course.edit', $course->id) }}"
                    class="btn bg-[#AC8039] border-0 text-white">Edit</a>
                <label for="deleteModal" class="btn btn-error text-white">Delete Course</label>
            </div>
        </div>

        <!-- Delete Modal -->
        <input type="checkbox" id="deleteModal" class="modal-toggle" />
        <div class="modal" role="dialog">
            <div class="modal-box bg-white">
                <h3 class="font-bold text-lg text-center">Are you sure you want to delete this course?</h3>
                <p class="text-center">The other modul and acitivaties will be automatically deleted too!</p>
                <form action="{{ route('admin.course.delete', $course->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-action flex justify-center gap-x-5">
                        <label for="deleteModal" class="btn">Close!</label>
                        <button class="btn btn-error text-white" type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>

        <p><a href="{{ route('admin.course') }}">Course</a> / <a
                href="{{ route('admin.course.detail', $courseCategory->id)  }}">
                {{ $courseCategory->name }}</a> / <a
                href="{{ route('admin.course.detailCourse', $course->id) }}">{{ $course->courseName }}</a></p>
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
        <div class="flex flex-col items-center gap-y-5 mt-5">
            @foreach($modul as $data)
            <div class="bg-white shadow-xl rounded-lg p-5 w-1/2">
                <div class="flex items-center gap-x-5">
                    <h1 class="text-xl font-bold text-gray-700">{{ $data->modul_name }}</h1>
                    <div class="flex items-center gap-x-1">
                        <label for="editModal" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </label>

                        <!-- Edit Modul Modal -->
                        <input type="checkbox" id="editModal" class="modal-toggle" />
                        <div class="modal" role="dialog">
                            <div class="modal-box bg-white">
                                <h3 class="font-bold text-lg text-center">Edit Modul!</h3>
                                <form action="{{ route('admin.modul.update', $data->id) }}" method="post" class="mt-2">
                                    @csrf
                                    <input type="text" name="modul_name" value="{{ $data->modul_name }}"
                                        placeholder="Type here" class="input input-bordered border-2 w-full bg-white" />
                                    <div class="modal-action">
                                        <label for="editModal" class="btn">Close!</label>
                                        <button class="btn btn-warning text-white" type="submit">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <a href="{{ route('admin.modul.question.create', $data->id) }}">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </a>
                        <label for="deleteModalModul" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </label>

                        <!-- Delete Modul Modal -->
                        <input type="checkbox" id="deleteModalModul" class="modal-toggle" />
                        <div class="modal" role="dialog">
                            <div class="modal-box bg-white">
                                <h3 class="font-bold text-lg text-center">Are you sure you want to delete this modul?
                                </h3>
                                <p class="font-medium text-center">The other activities will be deleted too</p>
                                <form action="{{ route('admin.modul.delete', $data->id) }}" method="post" class="mt-2">
                                    @csrf
                                    @method('delete')
                                    <div class="modal-action flex items-center justify-center gap-x-5">
                                        <label for="deleteModalModul" class="btn">Close!</label>
                                        <button class="btn btn-error text-white" type="submit">Delete Modul</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-y-3 mt-5">
                    @foreach($data->modulQuestions as $question)
                    <div class="flex justify-between items-center px-10">
                        <div class="flex items-center gap-x-2">
                            @if($question->modulType == "Presentation Materi")
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                            </svg>
                            @elseif($question->modulType == "Materi PDF")
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                            @elseif($question->modulType == "Post-Test")
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                            @elseif($question->modulType == "Video")
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                            </svg>
                            @endif
                            <p>{{ $question->modulType }} {{ $data->modul_name }}</p>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <label for="deleteModalActivities{{ $question->id }}" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </label>
                            <a href="{{ route('admin.modul.question.edit', $question->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>

                            <!-- Delete Modal -->
                            <input type="checkbox" id="deleteModalActivities{{ $question->id }}" class="modal-toggle" />
                            <div class="modal" role="dialog">
                                <div class="modal-box bg-white">
                                    <h3 class="font-bold text-lg text-center">Are you sure you want to delete this activities?</h3>
                                    <form action="{{ route('admin.modul.question.delete', $question->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="modal-action flex justify-center gap-x-5">
                                            <label for="deleteModalActivities{{ $question->id }}" class="btn">Close!</label>
                                            <button class="btn btn-error text-white" type="submit">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
