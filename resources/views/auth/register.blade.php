<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-9/12">
        @csrf
        <a href="/">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo LearnUMKM" class="mx-auto mb-5">
        </a>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="my-5">
            <h1 class="text-center text-xl font-medium">Informasi Bisnis</h1>
            <div>
                <x-input-label for="namaUMKM" :value="__('Nama UMKM')" />
                <x-text-input id="namaUMKM" class="block mt-1 w-full" type="text" name="namaUMKM"
                    :value="old('namaUMKM')" required autofocus autocomplete="namaUMKM" />
                <x-input-error :messages="$errors->get('namaUMKM')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="jenisUsaha" :value="__('Jenis Usaha')" />
                <select id="jenisUsaha"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    type="text" name="jenisUMKM" :value="old('jenisUsaha')" required autofocus
                    autocomplete="jenisUsaha">
                    <option value="">Pilih Jenis Usaha</option>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
                <x-input-error :messages="$errors->get('jenisUMKM')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="skalaUMKM" :value="__('Skala UMKM')" />
                <select id="skalaUMKM"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                    type="text" name="skalaUMKM" :value="old('skalaUMKM')" required autofocus
                    autocomplete="skalaUMKM">
                    <option value="">Pilih Skala Usaha</option>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
                <x-input-error :messages="$errors->get('skalaUsaha')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="nomorUMKM" :value="__('Nomor Telepon')" />
                <x-text-input id="nomorUMKM" class="block mt-1 w-full" type="text" name="nomorUMKM"
                    :value="old('nomorUMKM')" required autofocus autocomplete="nomorUMKM" />
                <x-input-error :messages="$errors->get('nomorUMKM')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
