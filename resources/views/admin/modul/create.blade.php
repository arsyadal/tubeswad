<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <h1 class="text-xl font-bold">Tambah Modul</h1>
        <p><a href="{{ route('admin.course') }}">Course</a> / <a href="{{ route('admin.course.detail', $courseCategory->id)  }}">
            {{ $courseCategory->name }}</a> / <a href="{{ route('admin.course.detailCourse', $course->id) }}">{{ $course->courseName }}</a> / Tambah Modul</p>
        <form action="{{ route('admin.modul.store') }}" method="post" enctype="multipart/form-data" class="rounded-lg bg-[#133256] p-5 mt-5">
            @csrf
            <div>
                <input type="hidden" name="course_category_id" value="{{ $course->category_id }}">
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <x-input-label for="namaModul" :value="__('Nama Modul')" class="text-white"/>
                <x-text-input id="namaModul" class="block mt-1 w-full" type="text" name="namaModul" :value="old('namaModul')" required autofocus />
                <x-input-error :messages="$errors->get('namaModul')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="forum" :value="__('Forum')" class="text-white"/>
                <x-text-input type="text" name="forum" class="block mt-1 w-full" required />
                <x-input-error :messages="$errors->get('forum')" class="mt-2" />
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit" class="btn bg-[#AC8039] text-white">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
