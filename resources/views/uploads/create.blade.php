<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Unggah Berkas</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="judul" class="block mb-1 font-medium">Judul</label>
                        <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                               class="w-full border-gray-300 rounded">
                        @error('judul')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="keterangan" class="block mb-1 font-medium">Keterangan (opsional)</label>
                        <textarea id="keterangan" name="keterangan" rows="3"
                                  class="w-full border-gray-300 rounded">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="file" class="block mb-1 font-medium">Berkas</label>
                        <input type="file" id="file" name="file">
                        <p class="mt-1 text-sm text-gray-500">Format: jpg, jpeg, png, pdf, doc, docx. Maksimal 2 MB.</p>
                        @error('file')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-3">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                        <a href="{{ route('uploads.index') }}" class="text-gray-600">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>