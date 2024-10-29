<x-landing-layout>
    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Penyuratan Desa <span class="text-primary">Uabanga</span>
        </h1>
        <p class="my-5 text-gray-500 lg:px-96">Kami berkomitmen untuk memberikan pelayanan yang transparan dan efisien,
            agar setiap permohonan dapat diproses dengan baik. Untuk mengajukan permohonan, silakan lengkapi formulir
            yang tersedia dan sertakan informasi yang diperlukan. Tim kami akan segera menindaklanjuti permohonan Anda.

            Dengan fitur ini, kami berharap dapat meningkatkan aksesibilitas dan kenyamanan bagi warga dalam mendapatkan
            dokumen yang dibutuhkan. Mari bersama-sama mewujudkan pemerintahan desa yang responsif dan bertanggung
            jawab.
        </p>
    </div>
    @if (session('success'))
        <div class="mx-20 mb-4 flex items-center rounded-lg bg-green-200 p-4 text-center text-green-800 dark:bg-gray-800 dark:text-green-400"
            id="alert-3" role="alert">
            <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                Berhasil! {{ session('success') }}
            </div>
            <button
                class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-green-50 p-1.5 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" type="button" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 flex items-center rounded-lg bg-red-200 p-4 text-red-800 dark:bg-gray-800 dark:text-red-400"
            id="alert-2" role="alert">
            <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                Gagal! {{ session('error') }}
            </div>
            <button
                class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-red-400 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" type="button" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    {{-- <div class="mx-20 mb-4 border-b border-gray-200 dark:border-gray-700">
        <button
            class="w-full rounded-lg border border-gray-300 bg-white p-4 text-left text-gray-700 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700"
            id="dropdown-button" type="button" aria-haspopup="true" aria-expanded="false">
            Pilih Surat Keterangan
            <span class="float-right">&#x25BC;</span> <!-- Arrow down icon -->
        </button>
        <div id="dropdown-menu" class="absolute hidden w-full rounded-lg bg-white shadow-lg dark:bg-gray-800">
            <ul class="text-sm font-medium text-gray-700 dark:text-gray-200" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="profile-tab" data-tabs-target="#ket-hewan" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">Surat Keterangan
                        Hewan Keluar</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#ket-kelakukan-baik" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Surat Keterangan Kelakuan Baik</button>
                </li>
                <li role="presentation">
                    <button
                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-tidak-mampu" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan Tidak Mampu</button>
                </li>
                <li role="presentation">
                    <button
                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-bpjs" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan Kepengurusan BPJS</button>
                </li>
                <li role="presentation">
                    <button
                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-kematian" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan Kematian</button>
                </li>
                <li role="presentation">
                    <button
                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-hilang" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan Hilang</button>
                </li>
                <li role="presentation">
                    <button
                        class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="contacts-tab" data-tabs-target="#ket-usaha" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false">Surat Keterangan Usaha</button>
                </li>
            </ul>
        </div>
    </div> --}}
    <div class="relative mx-20 mb-4">
        <button
            class="w-full rounded-lg border border-gray-300 bg-white p-4 text-left text-gray-700 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700"
            id="dropdown-button" type="button" aria-haspopup="true" aria-expanded="false">
            <span id="selected-item">Pilih Surat Keterangan</span>
            <span class="float-right">&#x25BC;</span> <!-- Arrow down icon -->
        </button>
        <div id="dropdown-menu" class="absolute hidden w-full rounded-lg bg-white shadow-lg dark:bg-gray-800">
            <ul class="text-sm font-medium text-gray-700 dark:text-gray-200" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab"
                        data-tabs-target="#ket-default" type="button" role="tab" aria-controls="profile"
                        aria-selected="true" data-name="Pilih Jenis Surat">-</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab"
                        data-tabs-target="#ket-hewan" type="button" role="tab" aria-controls="profile"
                        aria-selected="false" data-name="Surat Keterangan
                        Hewan Keluar">Surat
                        Keterangan
                        Hewan Keluar</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="dashboard-tab" data-tabs-target="#ket-kelakukan-baik" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false" data-name="Surat Keterangan Kelakuan Baik">Surat
                        Keterangan Kelakuan Baik</button>
                </li>
                {{-- <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#ket-nikah" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Surat Keterangan Nikah</button>
                </li> --}}
                <li role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="contacts-tab" data-tabs-target="#ket-tidak-mampu" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false" data-name="Surat Keterangan Tidak Mampu">Surat
                        Keterangan Tidak Mampu</button>
                </li>
                <li role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="contacts-tab" data-tabs-target="#ket-bpjs" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false"
                        data-name="Surat Keterangan Kepengurusan BPJS">Surat Keterangan Kepengurusan BPJS</button>
                </li>
                <li role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="contacts-tab" data-tabs-target="#ket-kematian" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false" data-name="Surat Keterangan Kematian">Surat
                        Keterangan Kematian</button>
                </li>
                <li role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="contacts-tab" data-tabs-target="#ket-hilang" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false" data-name="Surat Keterangan Hilang">Surat
                        Keterangan Hilang</button>
                </li>
                <li role="presentation">
                    <button class="block w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-700"
                        id="contacts-tab" data-tabs-target="#ket-usaha" type="button" role="tab"
                        aria-controls="contacts" aria-selected="false" data-name="Surat Keterangan Usaha">Surat
                        Keterangan Usaha</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="mx-20" id="default-tab-content">
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-hewan" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>
            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Umur : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="age" type="number" placeholder="21" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="address">Alamat
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="address" name="address" type="tel" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Nama Hewan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="animal" type="text" placeholder="Sapi" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="jumlah-hewan">Jumlah Hewan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="jumlah-hewan" name="total_animals" type="number" placeholder="3" required />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="place">Dibawah Ke : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="place" type="place" placeholder="" />
                        <div class="hidden">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="type">Tipe Surat
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="type" name="type" type="text" value="ket_hewan" placeholder=""
                                required />
                        </div>
                    </div>

                    <div id="dynamic-inputs"></div>

                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Ajukan Surat</button>
                </form>
            </div>

        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-default" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>

        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-kelakukan-baik" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_kelakuan_baik" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Status
                                PerMenikahan :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="married_status">

                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Pernah Menikah">Sudah Pernah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="place">NIK
                            : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="NIK" type="place" value="" placeholder="NIK" />
                    </div>

                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-tidak-mampu" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_tidak_mampu" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                    </div>



                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-bpjs" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_bpjs" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-kematian" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>

            <div class="my-10">
                <div class="hidden">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="type">Tipe
                        Surat
                        :</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="type" name="type" type="text" value="ket_kematian" placeholder=""
                        required />
                </div>
                <form method="POST" action="{{ route('document.store') }}">
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_kematian" placeholder=""
                            required />
                    </div>
                    @csrf
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat Terakhir:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Status
                                Pernikahan :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="married_status">

                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Pernah Menikah">Sudah Pernah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="kewarnanegaraaan">Kewarnanegaraan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="kewarnanegaraaan" name="kewarganegaraan" type="text" placeholder="WNI"
                                required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Hari Meninggal:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="day_death" type="text" placeholder="Senin" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Tanggal Meninggal:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="date_death" type="text" placeholder="01, November"
                                required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Tahun Meninggal:
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="year_death" type="text" placeholder="2024" required />
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="address">Alamat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="address" name="address" type="tel" placeholder="Jl. Manado" required />
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-usaha" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>
            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe
                            Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_usaha" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Status
                                Perkawinan :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="married_status">

                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Sudah Pernah Kawin">Sudah Pernah Kawin</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="kewarnanegaraaan">Nama Usaha :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="kewarnanegaraaan" name="business_name" type="text" placeholder="Butik"
                                required />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="place">NIK
                            : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="NIK" type="place" placeholder="" />
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden rounded-lg bg-gray-50 p-4 dark:bg-gray-800" id="ket-hilang" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">Fitur penyuratan di Uabanga dimulai dengan pengguna
                memilih jenis surat yang diinginkan dari daftar tersedia. Setelah itu, pengguna mengisi formulir dengan
                data yang diminta, sebelum mengirimkan permohonan surat. Setelah proses verifikasi oleh pihak
                administrasi desa, Pengguna kemudian datang ke kantor administrasi desa untung mengambil surat yang
                telah diverifikasi oleh admin desa uabanga</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="type">Tipe Surat
                            :</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="type" name="type" type="text" value="ket_hilang" placeholder=""
                            required />
                    </div>
                    <div class="mb-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="first_name">Nama Lengkap
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" type="text" placeholder="John" required />
                        </div>
                        <div class="">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="place">NIK
                                : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="place" name="NIK" type="place" placeholder="" />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="age">Tempat/Tanggal
                                Lahir : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="birth" type="text"
                                placeholder="Gorontalo, 17 Agustus 1945" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="alamat">Alamat :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="address" type="text" placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Agama :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="religion" type="text" placeholder="Islam" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Jenis Kelamin
                                :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="countries">Status
                                Pernikahan :</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="countries" name="married_status">

                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Pernah Menikah">Sudah Pernah Menikah</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="kewarnanegaraaan">Kewarnanegaraan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="kewarnanegaraaan" name="kewarganegaraan" type="text" placeholder="WNI"
                                required />
                        </div>
                        <div class="">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="ktp">Dokumen
                                Hilang:</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="ktp" name="document_name" type="text" placeholder="KTP" />
                        </div>
                    </div>
                    <div>
                        <div class="mb-6">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="chronology">Kronologi :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="chronology" name="chronology" type="text"
                                placeholder="Hilang dalam perjalanan menuju Kota Gorontalo" required
                                oninput="limitWords(this, 7)" />
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400" id="word-count"></p>
                        </div>
                        <button
                            class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                            type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function limitWords(input, maxWords) {
            const words = input.value.split(/\s+/).filter(word => word.length > 0);
            if (words.length > maxWords) {
                input.value = words.slice(0, maxWords).join(" ");
            }
            document.getElementById('word-count').textContent = `Jumlah kata: ${words.length}/${maxWords}`;
        }

        const jumlahHewanInput = document.getElementById('jumlah-hewan');
        const dynamicInputsContainer = document.getElementById('dynamic-inputs');

        jumlahHewanInput.addEventListener('input', function() {
            const jumlahHewan = parseInt(jumlahHewanInput.value) || 0;
            dynamicInputsContainer.innerHTML = ''; // Clear previous inputs

            for (let i = 1; i <= jumlahHewan; i++) {
                const animalForm = `
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Hewan ${i}</h3>
                        <div class="mb-6">
                            <label for="gender-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin (Jantan/Betina) :</label>
                            <input type="text" id="gender-${i}" name="gender_${i}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jantan/Betina" required  name="animal_${i}/>
                        </div>
                        <div class="mb-6">
                            <label for="warna-bulu-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna Bulu :</label>
                            <input type="text" id="warna-bulu-${i}" name="skin_color_${i}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Warna Bulu" required  name="animal_${i}/>
                        </div>
                        <div class="mb-6">
                            <label for="cap-merek-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cap/Merek :</label>
                            <input type="text" id="cap-merek-${i}" name="brand_${i}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cap/Merek" required  name="animal_${i}/>
                        </div>
                        <div class="mb-6">
                            <label for="jumlah-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah :</label>
                            <input type="number" id="jumlah-${i}" name="total_${i}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah" required />
                        </div>
                    </div>
                `;
                dynamicInputsContainer.insertAdjacentHTML('beforeend', animalForm);
            }
        });

        // Toggle the dropdown menu
        document.getElementById("dropdown-button").addEventListener("click", function() {
            var menu = document.getElementById("dropdown-menu");
            menu.classList.toggle("hidden");
        });

        // Hide dropdown menu on clicking outside
        document.addEventListener("click", function(e) {
            var button = document.getElementById("dropdown-button");
            var menu = document.getElementById("dropdown-menu");
            if (!button.contains(e.target)) {
                menu.classList.add("hidden");
            }
        });

        // Change button text to selected item
        document.querySelectorAll('#dropdown-menu button').forEach(function(item) {
            item.addEventListener("click", function() {
                // Update the button text
                document.getElementById("selected-item").innerText = this.getAttribute("data-name");
                // Close the dropdown
                document.getElementById("dropdown-menu").classList.add("hidden");
            });
        });
    </script>
</x-landing-layout>
