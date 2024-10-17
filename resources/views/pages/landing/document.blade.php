<x-landing-layout>
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Penyuratan Desa <span class="text-primary">Uabanga</span>
        </h1>
        <p class="text-gray-500 my-5 lg:px-96">Kami berkomitmen untuk memberikan pelayanan yang transparan dan efisien,
            agar setiap permohonan dapat diproses dengan baik. Untuk mengajukan permohonan, silakan lengkapi formulir
            yang tersedia dan sertakan informasi yang diperlukan. Tim kami akan segera menindaklanjuti permohonan Anda.

            Dengan fitur ini, kami berharap dapat meningkatkan aksesibilitas dan kenyamanan bagi warga dalam mendapatkan
            dokumen yang dibutuhkan. Mari bersama-sama mewujudkan pemerintahan desa yang responsif dan bertanggung
            jawab.
        </p>
    </div>

    <div class="mb-4 mx-20 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
            data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#ket-hewan"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">Surat Keterangan
                    Hewan Keluar</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="dashboard-tab" data-tabs-target="#ket-kelakukan-baik" type="button" role="tab"
                    aria-controls="dashboard" aria-selected="false">Surat Keterangan Kelakuan Baik</button>
            </li>
            {{-- <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="settings-tab" data-tabs-target="#ket-nikah" type="button" role="tab"
                    aria-controls="settings" aria-selected="false">Surat Keterangan Nikah</button>
            </li> --}}
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#ket-tidak-mampu" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">Surat Keterangan Tidak Mampu</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#ket-bpjs" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">Surat Keterangan Kepengurusan BPJS</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#ket-kematian" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">Surat Keterangan Kematian</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#ket-hilang" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">Surat Keterangan Hilang</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#ket-usaha" type="button" role="tab"
                    aria-controls="contacts" aria-selected="false">Surat Keterangan Usaha</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content" class="mx-20">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-hewan" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>
            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur : </label>
                            <input type="number" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="21" required name="age" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                :</label>
                            <input type="tel" id="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. Manado" required name="address" />
                        </div>
                        <div>
                            <label for="nama-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Hewan :
                            </label>
                            <input type="text" id="nama-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Sapi" required name="animal" />
                        </div>
                        <div>
                            <label for="jumlah-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Hewan :
                            </label>
                            <input type="number" id="jumlah-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="3" required name="total_animals" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="place"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dibawah Ke : </label>
                        <input type="place" id="place"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" name="place" />
                        <div class="hidden">
                            <label for="type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                                :</label>
                            <input type="text" id="type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                placeholder="" required name="type" value="ket_hewan" />
                        </div>
                    </div>

                    <div id="dynamic-inputs"></div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-kelakukan-baik" role="tabpanel"
            aria-labelledby="dashboard-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                            :</label>
                        <input type="text" id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="" required name="type" value="ket_kelakuan_baik" />
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                                Lahir : </label>
                            <input type="text" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                Perkawinan :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="married_status">

                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Sudah Pernah Kawin">Sudah Pernah Kawin</option>
                            </select>
                        </div>
                        <div>
                            <label for="nama-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama :
                            </label>
                            <input type="text" id="nama-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Islam" required name="religion" />
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin
                                :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK
                            : </label>
                        <input type="place" id="place"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="NIK" value="" name="NIK" />
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
        {{-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-nikah" role="tabpanel"
            aria-labelledby="settings-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap:</label>
                        <input type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="John" required />
                    </div>
                    <div>
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                            Lahir:</label>
                        <input type="text" id="age"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                    </div>
                    <div>
                        <label for="pekerjaan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan:</label>
                        <input type="text" id="pekerjaan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Pengusaha" required />
                    </div>
                    <div>
                        <label for="status_perkawinan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                            Perkawinan:</label>
                        <select id="status_perkawinan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="married_status">
                            <option value="">Pilih status</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Pernah Kawin">Belum Pernah Kawin</option>
                            <option value="Duda">Duda</option>
                            <option value="Janda">Janda</option>
                        </select>
                    </div>
                    <div>
                        <label for="agama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama:</label>
                        <input type="text" id="agama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Islam" required />
                    </div>
                    <div>
                        <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin:</label>
                        <select id="gender"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="gender">
                            <option value="">Pilih jenis kelamin</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="jumlah-istri"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Istri
                            (kosongkan jika tidak perlu):</label>
                        <input type="text" id="jumlah-istri"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" />
                    </div>
                    <div>
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Suami/Istri
                            Terdahulu (kosongkan jika tidak perlu):</label>
                        <input type="text" id="age"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required />
                    </div>
                </div>



                <div class="mb-6">
                    <label for="ktp"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK:</label>
                    <input type="text" id="ktp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nomor KTP" name="NIK" />
                </div>



                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div> --}}
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-tidak-mampu" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                            :</label>
                        <input type="text" id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="" required name="type" value="ket_tidak_mampu" />
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                                Lahir : </label>
                            <input type="text" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. Manado" required name="address" />
                        </div>
                    </div>



                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-bpjs" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                            :</label>
                        <input type="text" id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="" required name="type" value="ket_bpjs" />
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                                Lahir : </label>
                            <input type="text" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. Manado" required name="address" />
                        </div>
                        <div>
                            <label for="nama-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama :
                            </label>
                            <input type="text" id="nama-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Islam" required name="religion" />
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin
                                :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-kematian" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <div class="my-10">
                <div class="hidden">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                        Surat
                        :</label>
                    <input type="text" id="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                        placeholder="" required name="type" value="ket_kematian" />
                </div>
                <form method="POST" action="{{ route('document.store') }}">
                    <div class="hidden">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                            :</label>
                        <input type="text" id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="" required name="type" value="ket_kematian" />
                    </div>
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                                Lahir : </label>
                            <input type="text" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Terakhir:
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. Manado" required name="address" />
                        </div>
                        <div>
                            <label for="nama-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama :
                            </label>
                            <input type="text" id="nama-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Islam" required name="religion" />
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin
                                :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                Perkawinan :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="married_status">

                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Sudah Pernah Kawin">Sudah Pernah Kawin</option>
                            </select>
                        </div>
                        <div>
                            <label for="kewarnanegaraaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarnanegaraan :
                            </label>
                            <input type="text" id="kewarnanegaraaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="WNI" required name="kewarganegaraan" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari Meninggal:
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Senin" required name="day_death" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Meninggal:
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="01, November" required name="date_death" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Meninggal:
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="2024" required name="year_death" />
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-hilang" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                            :</label>
                        <input type="text" id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="" required name="type" value="ket_hilang" />
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                                Lahir : </label>
                            <input type="text" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Terakhir:
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. Manado" required name="address" />
                        </div>
                        <div>
                            <label for="nama-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama :
                            </label>
                            <input type="text" id="nama-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Islam" required name="religion" />
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin
                                :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                Perkawinan :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="married_status">

                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Sudah Pernah Kawin">Sudah Pernah Kawin</option>
                            </select>
                        </div>
                        <div>
                            <label for="kewarnanegaraaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarnanegaraan :
                            </label>
                            <input type="text" id="kewarnanegaraaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="WNI" required name="kewarganegaraan" />
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="ktp"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokumen
                            Hilang:</label>
                        <input type="text" id="ktp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="KTP" name="document_name" />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ket-usaha" role="tabpanel"
            aria-labelledby="contacts-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                classes to control the content visibility and styling.</p>

            <div class="my-10">
                <form method="POST" action="{{ route('document.store') }}">
                    @csrf
                    <div class="hidden">
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat
                            :</label>
                        <input type="text" id="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="" required name="type" value="ket_usaha" />
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap
                                :</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required name="name" />
                        </div>
                        <div>
                            <label for="age"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat/Tanggal
                                Lahir : </label>
                            <input type="text" id="age"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gorontalo, 17 Agustus 1945" required name="birth" />
                        </div>
                        <div>
                            <label for="pekerjaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan :
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pengusaha" required name="job" />
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Terakhir:
                            </label>
                            <input type="text" id="pekerjaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. Manado" required name="address" />
                        </div>
                        <div>
                            <label for="nama-hewan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama :
                            </label>
                            <input type="text" id="nama-hewan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Islam" required name="religion" />
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin
                                :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="gender">

                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                Perkawinan :</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="married_status">

                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Sudah Pernah Kawin">Sudah Pernah Kawin</option>
                            </select>
                        </div>
                        <div>
                            <label for="kewarnanegaraaan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarnanegaraan :
                            </label>
                            <input type="text" id="kewarnanegaraaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="WNI" required name="kewarganegaraan" />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK
                            : </label>
                        <input type="place" id="place"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" name="NIK" />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
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
    </script>
</x-landing-layout>
