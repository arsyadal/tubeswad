<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <h1 class="text-xl font-bold">Tambah Modul Activities</h1>
        <p><a href="{{ route('admin.course') }}">Course</a> / <a href="{{ route('admin.course.detail', $courseCategory->id)  }}">
            {{ $courseCategory->name }}</a> / <a href="{{ route('admin.course.detailCourse', $course->id) }}">{{ $course->courseName }}</a> / Tambah Activities</p>
        <form action="{{ route('admin.modul.question.store') }}" method="post" enctype="multipart/form-data"
            class="rounded-lg bg-[#133256] p-5 mt-5">
            @csrf
            <div>
                <input type="hidden" name="modul_id" value="{{ $modul->id }}">
                <x-input-label for="namaModul" :value="__('Activities Type')" class="text-white" />
                <select name="modulType" id="select"
                    class="bg-white p-2 block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">Select Modul Type</option>
                    <option value="Presentation Materi">Presentation Materi</option>
                    <option value="Materi PDF">Materi PDF</option>
                    <option value="Post-Test">Post-Test</option>
                    <option value="Video">Video</option>
                </select>
                <x-input-error :messages="$errors->get('namaModul')" class="mt-2" />
            </div>
            <div class="mt-4" id="materi">
                <x-input-label for="materi" :value="__('File Materi')" class="text-white" />
                <input type="file" class="file-input file-input-bordered w-full bg-white " 
                        name="materi" :value="old('materi')" required/>
                <x-input-error :messages="$errors->get('materi')" class="mt-2" />
            </div>
            <div class="mt-4" id="deskripsi">
                <x-input-label for="deskripsi" :value="__('Deskripsi Materi')" class="text-white" />
                <textarea id="deskripsi" class="bg-white p-2 block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" 
                name="deskripsi" :value="old('deskripsi')" required></textarea>
                <x-input-error :messages="$errors->get('materi')" class="mt-2" />
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit" class="btn bg-[#AC8039] text-white">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
