<x-app-layout>
    <div class="pt-4">
        <div class="max-w-7xl px-0 sm:px-6 lg:px-8">
            <div class="mb-3 flex justify-between rounded-lg bg-secondary p-4 text-white shadow-lg">

                <h2>Edit Peternakan</h2>
                <a class="flex items-center hover:underline" href="{{ route('admin.farm.index') }}">
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
                        id="toast-success" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('success') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-success" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @elseif(Session::has('error'))
                    <div class="mb-4 flex w-full max-w-xs items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-danger" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('error') }}</div>
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

                <form class="mx-auto max-w-full" action="{{ route('admin.farm.update', ['farm' => $farm->id]) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 grid w-full grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="gender">Nama Dusun</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="village_name" name="village_id" required>
                                <option value="">Pilih Dusun</option>

                                @foreach ($villages as $village)
                                    <option value="{{ $village->id }}"
                                        {{ old('village_id', $farm->village_id) == $village->id ? 'selected' : '' }}>
                                        {{ $village->village_name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('village_id')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="grid w-full grid-cols-3 gap-4">
                        <div class="grid w-full grid-cols-2 gap-2">
                            <label
                                class="col-span-2 block text-sm font-medium text-gray-900 dark:text-white">Sapi</label>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="cow_count">Jumlah Sapi</label>
                                <input
                                    class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="cow_count" name="cow_count" type="number"
                                    value="{{ old('cow_count', $farm->cow_count) }}" placeholder="0" required />
                                @error('cow_count')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="cow_owner">Jumlah Pemilik Sapi</label>
                                <input
                                    class="col-span-2 block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="cow_owner" name="cow_owner" type="number"
                                    value="{{ old('cow_owner', $farm->cow_owner) }}" placeholder="0" required />
                                @error('cow_owner')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid w-full grid-cols-2 gap-2">
                            <label
                                class="col-span-2 block text-sm font-medium text-gray-900 dark:text-white">Kambing</label>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="goat_count">Jumlah Kambing</label>
                                <input
                                    class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="goat_count" name="goat_count" type="number"
                                    value="{{ old('goat_count', $farm->goat_count) }}" placeholder="0" required />
                                @error('goat_count')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="goat_owner">Jumlah Pemilik Kambing</label>
                                <input
                                    class="col-span-2 block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="goat_owner" name="goat_owner" type="number"
                                    value="{{ old('goat_owner', $farm->goat_owner) }}" placeholder="0" required />
                                @error('goat_owner')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid w-full grid-cols-2 gap-2">
                            <label
                                class="col-span-2 block text-sm font-medium text-gray-900 dark:text-white">Anjing</label>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="dog_count">Jumlah Anjing</label>
                                <input
                                    class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="dog_count" name="dog_count" type="number"
                                    value="{{ old('dog_count', $farm->dog_count) }}" placeholder="0" required />
                                @error('dog_count')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="dog_owner">Jumlah Pemilik Anjing</label>
                                <input
                                    class="col-span-2 block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="dog_owner" name="dog_owner" type="number"
                                    value="{{ old('dog_owner', $farm->dog_owner) }}" placeholder="0" required />
                                @error('dog_owner')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid w-full grid-cols-2 gap-2">
                            <label
                                class="col-span-2 block text-sm font-medium text-gray-900 dark:text-white">Anjing</label>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="cat_count">Jumlah Kucing</label>
                                <input
                                    class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="cat_count" name="cat_count" type="number"
                                    value="{{ old('cat_count', $farm->cat_count) }}" placeholder="0" required />
                                @error('cat_count')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="cat_owner">Jumlah Pemilik Kucing</label>
                                <input
                                    class="col-span-2 block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="cat_owner" name="cat_owner" type="number"
                                    value="{{ old('cat_owner', $farm->cat_owner) }}" placeholder="0" required />
                                @error('cat_owner')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid w-full grid-cols-2 gap-2">
                            <label
                                class="col-span-2 block text-sm font-medium text-gray-900 dark:text-white">Ayam</label>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="chicken_count">Jumlah Ayam</label>
                                <input
                                    class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="chicken_count" name="chicken_count" type="number"
                                    value="{{ old('chicken_count', $farm->chicken_count) }}" placeholder="0"
                                    required />
                                @error('chicken_count')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="chicken_owner">Jumlah Pemilik Ayam</label>
                                <input
                                    class="col-span-2 block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="chicken_owner" name="chicken_owner" type="number"
                                    value="{{ old('chicken_owner', $farm->chicken_owner) }}" placeholder="0"
                                    required />
                                @error('chicken_owner')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid w-full grid-cols-2 gap-2">
                            <label
                                class="col-span-2 block text-sm font-medium text-gray-900 dark:text-white">Anjing</label>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="duck_count">Jumlah Itik</label>
                                <input
                                    class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="duck_count" name="duck_count" type="number"
                                    value="{{ old('duck_count', $farm->duck_count) }}" placeholder="0" required />
                                @error('duck_count')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-primary dark:text-white"
                                    for="duck_owner">Jumlah Pemilik Itik</label>
                                <input
                                    class="col-span-2 block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                    id="duck_owner" name="duck_owner" type="number"
                                    value="{{ old('duck_owner', $farm->duck_owner) }}" placeholder="0" required />
                                @error('duck_owner')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
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
                    preview.style.display = 'none';
                }
            }
        </script>
    @endpush
</x-app-layout>
