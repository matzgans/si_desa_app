<x-app-layout>
    <div class="pt-4">
        <div class="max-w-full px-3 sm:px-6 lg:px-8">
            <div class="mb-3 flex justify-between rounded-lg bg-secondary p-4 text-white shadow-lg">
                <h2>Edit Data Surat Keterangan Usaha</h2>
                <a class="flex items-center hover:underline" href="{{ route('admin.document.kelbaik.index') }}">
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    <span class="ml-3">Kembali</span>
                </a>
            </div>
            <div class="rounded-lg bg-white p-4 text-white shadow-lg">
                <form method="POST" action="{{ route('admin.document.usaha.update', ['usaha' => $id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" value="{{ $data['name'] }}"
                                placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="NIK">NIK
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="NIK" name="NIK" type="number" value="{{ $data['NIK'] }}"
                                placeholder="162001312" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="job">Pekerjaan
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="job" name="job" type="text" value="{{ $data['job'] }}"
                                placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="birth">Tempat, Tanggal Lahir
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="birth" name="birth" type="text" value="{{ $data['birth'] }}"
                                placeholder="Gorontalo, 16 September 2002" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="status_resident">Status Pernikahan</label>
                            <select
                                class="block w-full rounded-lg border border-secondary bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-secondary dark:border-secondary dark:bg-gray-700 dark:text-white"
                                id="married_status" name="married_status" required>
                                <option value="">Pilih Status</option>

                                <option value="Belum Menikah"
                                    {{ old('married_status', $data['married_status']) == 'Belum Menikah' ? 'selected' : '' }}>
                                    Belum Menikah</option>
                                <option value="Menikah"
                                    {{ old('married_status', $data['married_status']) == 'Menikah' ? 'selected' : '' }}>
                                    Menikah</option>
                                <option value="Sudah Pernah Menikah"
                                    {{ old('married_status', $data['married_status']) == 'Sudah Pernah Menikah' ? 'selected' : '' }}>
                                    Sudah Pernah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki"
                                    {{ old('gender', $data['gender']) == 'Laki Laki' ? 'selected' : '' }}>Laki Laki
                                </option>
                                <option value="Perempuan"
                                    {{ old('gender', $data['gender']) == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="religion">Agama
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="religion" name="religion" type="text" value="{{ $data['religion'] }}"
                                placeholder="Agama, Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="no_surat">NO
                                Surat:</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="no_surat" name="no_surat" type="text" value="{{ $no_surat }}"
                                placeholder="Contoh : 145 / DU-BP / 2023 / 2023 /2024" />
                            <div class="hidden">
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="type">Tipe Surat:</label>
                                <input
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    id="type" name="type" type="text" value="ket_usaha" required />
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="kewarnanegaraaan">Nama Usaha :
                        </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="kewarnanegaraaan" name="business_name" type="text"
                            value="{{ $data['business_name'] }}" placeholder="Butik" required />
                    </div>

                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        @push('after-scripts')
        @endpush
</x-app-layout>
