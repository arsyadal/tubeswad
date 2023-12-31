<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <p class="text-gray-700"><a href="">{{ $courseCategory->name }}</a> / <a href="">{{ $course->courseName }}</a> /
            <a href="">{{ $modul->modul_name }}</a> / Activities</p>
        <div class="flex gap-x-5 mt-4">
            <div class="w-4/6">
                <h1 class="font-bold text-xl">{{ $modul->modul_name }}</h1>
                <h1 class="font-bold text-xl">{{ $activities->modulType }}</h1>
                <div class="p-3 w-full border-2 border-black rounded-lg mt-5">
                @php
                    $fileExtension = strtolower(pathinfo($activities->materi, PATHINFO_EXTENSION));
                @endphp
                    @if($fileExtension == 'pdf') 
                        <embed src="{{ asset('storage/modulMateri/'. $activities->materi) }}" type="application/pdf" class="w-full h-96">
                    @elseif($fileExtension == 'mp4') 
                    <video controls class="w-full min-h-[96px]">
                        <source src="{{ asset('storage/modulMateri/'. $activities->materi) }}" type="video/mp4">
                        Browsermu tidak mendukung tag ini
                    </video>
                    @else
                        <div class="bg-center bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/modulMateri/'. $activities->materi) }}')">
                            <img src="{{ asset('assets/kelass2.jpg') }}" alt="" >
                        </div>
                    @endif
                </div>
            </div>
            <div class="w-2/6">
                <div class="bg-[#DCE1FF] p-3 rounded-lg">
                    <h1 class="text-center font-bold text-xl">{{ $modul->modul_name }}</h1>
                    <div class="flex flex-col gap-y-3 mt-5">
                        @foreach($modul->modulQuestions as $question)
                        <div class="flex justify-center items-center px-10">
                            <a href="{{ route('user.activities', $question->id) }}" class="flex items-center gap-x-2">
                                @if($question->modulType == "Presentation Materi")
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                </svg>
                                @elseif($question->modulType == "Materi PDF")
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                @elseif($question->modulType == "Post-Test")
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>
                                @elseif($question->modulType == "Video")
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                                </svg>
                                @endif
                                <p>{{ $question->modulType }} {{ $modul->modul_name }}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
