<x-app-layout>
    <div class="pt-4">
        <div class="max-w-7xl px-0 sm:px-6 lg:px-8">
            <div class="mb-3 flex justify-between rounded-lg bg-secondary p-4 text-white shadow-lg">

                <h2>Tambah Penduduk</h2>
                <a class="flex items-center hover:underline"
                    href="{{ route('admin.resident.index', ['resident' => $resident->uuid]) }}">
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    <span class="ml-3">Kembali</span>
                </a>
            </div>
            <div class="rounded-lg bg-white p-4 text-white shadow-lg">
                @if (Session::has('success'))
                    <div class="mb-4 flex w-full max-w-full items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-danger" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <div
                                class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200">
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('success') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-danger" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                <form class="mx-auto max-w-full"
                    action="{{ route('admin.resident.update', ['resident' => $resident->uuid]) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid w-full grid-cols-2 gap-4">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="name">Nama</label>
                            <input
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="name" name="name" type="text" value="{{ old('name', $resident->name) }}"
                                placeholder="John Anderson...." required />
                            @error('name')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nik">NIK</label>
                            <input
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="nik" name="nik" type="number" value="{{ old('nik', $resident->nik) }}"
                                placeholder="NIK...." required />
                            @error('nik')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="gender">Gender</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="gender" name="gender" required>
                                <option value="">Pilih Gender</option>
                                <option value="Perempuan"
                                    {{ old('gender', $resident->gender) == 'Perempuan' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="Laki - Laki"
                                    {{ old('gender', $resident->gender) == 'Laki - Laki' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                            @error('gender')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="birth_date">Tanggal Lahir</label>
                            <input
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="birth_date" name="birth_date" type="date"
                                value="{{ old('birth_date', $resident->birth_date) }}" required />
                            @error('birth_date')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="occupation">Pekerjaan</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="occupation" name="occupation" required>
                                <option value="">Pilih Pekerjaan</option>
                                <option value="pegawai"
                                    {{ old('occupation', $resident->occupation) == 'pegawai' ? 'selected' : '' }}>
                                    Pegawai
                                </option>
                                <option value="wiraswasta"
                                    {{ old('occupation', $resident->occupation) == 'wiraswasta' ? 'selected' : '' }}>
                                    Wiraswasta</option>
                                <option value="pelajar"
                                    {{ old('occupation', $resident->occupation) == 'pelajar' ? 'selected' : '' }}>
                                    Pelajar
                                </option>
                                <option value="lainnya"
                                    {{ old('occupation', $resident->occupation) == 'lainnya' ? 'selected' : '' }}>
                                    Lainnya
                                </option>
                            </select>
                            @error('occupation')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="education_level">Tingkat Pendidikan</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="education_level" name="education_level" required>
                                <option value="">Pilih Tingkat Pendidikan</option>
                                <option value="sd"
                                    {{ old('education_level', $resident->education_level) == 'sd' ? 'selected' : '' }}>
                                    Sekolah
                                    Dasar</option>
                                <option value="smp"
                                    {{ old('education_level', $resident->education_level) == 'smp' ? 'selected' : '' }}>
                                    Sekolah
                                    Menengah Pertama</option>
                                <option value="sma"
                                    {{ old('education_level', $resident->education_level) == 'sma' ? 'selected' : '' }}>
                                    Sekolah
                                    Menengah Atas</option>
                                <option value="diploma"
                                    {{ old('education_level', $resident->education_level) == 'diploma' ? 'selected' : '' }}>
                                    Diploma</option>
                                <option value="sarjana"
                                    {{ old('education_level', $resident->education_level) == 'sarjana' ? 'selected' : '' }}>
                                    Sarjana</option>
                                <option value="pasca-sarjana"
                                    {{ old('education_level') == 'pasca-sarjana', $resident->education_level ? 'selected' : '' }}>
                                    Pasca Sarjana
                                </option>
                            </select>
                            @error('education_level')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="status_resident">Status Penduduk</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="status_resident" name="status_resident" required>
                                <option value="">Pilih Status</option>
                                <option value="Pelajar"
                                    {{ old('status_resident', $resident->status_resident) == 'Pelajar' ? 'selected' : '' }}>
                                    Pelajar</option>
                                <option value="Menikah"
                                    {{ old('status_resident', $resident->status_resident) == 'Menikah' ? 'selected' : '' }}>
                                    Menikah</option>
                                <option value="Belum Menikah"
                                    {{ old('status_resident', $resident->status_resident) == 'Belum Menikah' ? 'selected' : '' }}>
                                    Belum Menikah
                                </option>
                                <option value="Janda"
                                    {{ old('status_resident', $resident->status_resident) == 'Janda' ? 'selected' : '' }}>
                                    Janda
                                </option>
                                <option value="Duda"
                                    {{ old('status_resident', $resident->status_resident) == 'Duda' ? 'selected' : '' }}>
                                    Duda
                                </option>
                            </select>
                            @error('status_resident')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-2 mb-6 grid grid-cols-2 gap-4">
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="photo_profile">Foto Profil</label>
                                <label
                                    class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600 dark:hover:bg-gray-800"
                                    for="dropzone-file">
                                    <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                        <svg class="mb-4 h-8 w-8 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>
                                    </div>

                                    <!-- Input file untuk foto profil -->
                                    <!-- Input file untuk foto profil -->
                                    <input class="hidden" id="dropzone-file" name="photo_profile" type="file"
                                        accept="image/*" onchange="previewImage(event)" />

                                    @error('photo_profile')
                                        <span class="text-sm text-red-500">{{ $message }}</span>
                                    @enderror
                                </label>
                            </div>

                            <!-- Preview Image -->
                            <div class="relative h-64 w-full rounded-lg border-2 border-gray-300">
                                <img class="h-full w-full rounded-lg object-cover" id="preview"
                                    src="{{ asset('residents/images/' . $resident->photo_profile) }}"
                                    alt="Image preview" />

                            </div>
                        </div>
                    </div>

                    <button class="mt-4 w-full rounded-lg bg-primary px-3 py-2 text-white hover:bg-secondary"
                        type="submit">
                        Simpan
                    </button>
                </form>

            </div>
        </div>



    </div>
    @push('after-scripts')
        <script>
            function previewImage(event) {
                const preview = document.getElementById('preview');
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    // Jika tidak ada file yang dipilih, tetap tampilkan gambar yang ada
                    const existingPhoto = '{{ $resident->photo_profile }}';
                    if (existingPhoto) {
                        preview.src = existingPhoto;
                        preview.style.display = 'block';
                    } else {
                        preview.style.display = 'none';
                    }
                }
            }
        </script>
    @endpush
</x-app-layout>
