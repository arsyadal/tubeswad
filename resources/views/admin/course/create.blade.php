<x-app-layout>
    <div class="py-12 px-10 text-gray-700">
        <h1 class="text-xl font-bold">Tambah Courses</h1>
        <p><a href="{{ route('admin.course') }}">Course</a> / <a href="{{ route('admin.course.detail', $courseCategory->id)  }}">
            {{ $courseCategory->name }}</a> / Create</p>

        <form action="{{ route('admin.course.store') }}" method="post" enctype="multipart/form-data" class="rounded-lg bg-[#133256] p-5 mt-5">
            @csrf
            <input type="hidden" name="category_id" value="{{ $courseCategory->id }}">
            <div>
                <x-input-label for="courseName" :value="__('Nama Courses')" class="text-white"/>
                <x-text-input id="courseName" class="block mt-1 w-full" type="text" name="courseName" :value="old('courseName')" required autofocus />
                <x-input-error :messages="$errors->get('courseName')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="namaPemateri" :value="__('Nama Pemateri')" class="text-white"/>
                <x-text-input id="namaPemateri" class="block mt-1 w-full" type="text" name="namaPemateri" :value="old('namaPemateri')" required />
                <x-input-error :messages="$errors->get('namaPemateri')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="deskripsi" :value="__('Deskripsi Course')" class="text-white"/>
                <textarea name="deskripsi" class="textarea textarea-bordered block mt-1 w-full bg-white" placeholder="Deskripsi Course" required></textarea>
                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="file" :value="__('Photo')" class="text-white"/>
                <input type="file" name="file" class="file-input file-input-bordered block mt-1 w-full bg-white" required/>
                <x-input-error :messages="$errors->get('file')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="sertifikat" :value="__('Sertifikat')" class="text-white"/>
                <input type="file" name="sertifikat" class="file-input file-input-bordered block mt-1 w-full bg-white" required/>
                <x-input-error :messages="$errors->get('sertifikat')" class="mt-2" />
            </div>
            <div class="flex gap-x-5 justify-center mt-5">
                <button class="btn bg-[#AC8039] text-white">Save</button>
                <label class="btn bg-[#E66D57] text-white">Cancel</label>
            </div>
        </form>
    </div>
</x-app-layout>
