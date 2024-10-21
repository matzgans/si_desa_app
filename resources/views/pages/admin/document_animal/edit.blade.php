<x-app-layout>
    <div class="pt-4">
        <div class="max-w-full px-3 sm:px-6 lg:px-8">
            <div class="mb-3 flex justify-between rounded-lg bg-secondary p-4 text-white shadow-lg">
                <h2>Edit Data Surat Keterangan Hewan Keluar</h2>
                <a class="flex items-center hover:underline" href="{{ route('dashboard') }}">
                    <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>
                    <span class="ml-3">Kembali</span>
                </a>
            </div>
            <div class="rounded-lg bg-white p-4 text-white shadow-lg">
                <form method="POST" action="{{ route('admin.document.animal.update', ['animal' => $id]) }}">
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
                                for="age">Umur : </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="age" name="age" type="number" value="{{ $data['age'] }}"
                                placeholder="21" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="pekerjaan">Pekerjaan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="pekerjaan" name="job" type="text" value="{{ $data['job'] }}"
                                placeholder="Pengusaha" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="address">Alamat
                                :</label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="address" name="address" type="tel" value="{{ $data['address'] }}"
                                placeholder="Jl. Manado" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="nama-hewan">Nama Hewan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="nama-hewan" name="animal" type="text" value="{{ $data['animal'] }}"
                                placeholder="Sapi" required />
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="jumlah-hewan">Jumlah Hewan :
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="jumlah-hewan" name="total_animals" type="number"
                                value="{{ $data['total_animals'] }}" placeholder="3" required />
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="place">Dibawah Ke : </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="place" name="place" type="place" value="{{ $data['name'] }}" placeholder="" />
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
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="no_surat">NO
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
                                id="type" name="type" type="text" value="ket_hewan" required />
                        </div>
                    </div>

                    <div id="dynamic-inputs"></div>

                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">Submit</button>
                </form>
            </div>
        </div>
        @push('after-scripts')
            <script>
                function confirmDelete(itemId, itemName) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Kamu akan mengapus " + itemName,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + itemId).submit();
                        }
                    });
                }

                function confirmPrint(itemId, itemName) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Kamu akan Print data  " + itemName,
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('print-form-' + itemId).submit();
                        }
                    });
                }
            </script>
            <script>
                // Fungsi untuk mendapatkan nilai dari database
                function getValueFromDatabase(fieldName, index) {
                    const data = @json($data); // Convert PHP array ke JSON
                    const fieldKey = `${fieldName}_${index}`;
                    return data[fieldKey] || '';
                }

                // Fungsi untuk membuat form hewan secara dinamis
                function generateAnimalForms(jumlahHewan) {
                    const dynamicInputsContainer = document.getElementById('dynamic-inputs');
                    dynamicInputsContainer.innerHTML = ''; // Bersihkan form sebelumnya

                    for (let i = 1; i <= jumlahHewan; i++) {
                        // Ambil nilai dari database untuk setiap field
                        const genderValue = getValueFromDatabase('gender', i);
                        const skinColorValue = getValueFromDatabase('skin_color', i);
                        const brandValue = getValueFromDatabase('brand', i);
                        const totalValue = getValueFromDatabase('total', i);

                        const animalForm = `
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Hewan ${i}</h3>
                            <div class="mb-6">
                                <label for="gender-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Jenis Kelamin (Jantan/Betina) :
                                </label>
                                <input 
                                    type="text" 
                                    id="gender-${i}" 
                                    name="gender_${i}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Jantan/Betina" 
                                    required 
                                    value="${genderValue}"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="warna-bulu-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Warna Bulu :
                                </label>
                                <input 
                                    type="text" 
                                    id="warna-bulu-${i}" 
                                    name="skin_color_${i}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Warna Bulu" 
                                    required
                                    value="${skinColorValue}"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="cap-merek-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Cap/Merek :
                                </label>
                                <input 
                                    type="text" 
                                    id="cap-merek-${i}" 
                                    name="brand_${i}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Cap/Merek" 
                                    required
                                    value="${brandValue}"
                                />
                            </div>
                            <div class="mb-6">
                                <label for="jumlah-${i}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Jumlah :
                                </label>
                                <input 
                                    type="number" 
                                    id="jumlah-${i}" 
                                    name="total_${i}" 
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Jumlah" 
                                    required
                                    value="${totalValue}"
                                />
                            </div>
                        </div>
                    `;
                        dynamicInputsContainer.insertAdjacentHTML('beforeend', animalForm);
                    }
                }

                // Saat halaman pertama kali dimuat
                document.addEventListener('DOMContentLoaded', function() {
                    // Ambil jumlah hewan dari backend
                    const jumlahHewan = parseInt({{ $data['total_animals'] ?? 0 }});

                    // Set nilai input jumlah hewan
                    const jumlahHewanInput = document.getElementById('jumlah-hewan');
                    if (jumlahHewanInput) {
                        jumlahHewanInput.value = jumlahHewan;
                    }

                    generateAnimalForms(jumlahHewan); // Buat form langsung saat halaman dimuat
                });

                // Tambahkan event listener untuk memperbarui form ketika input jumlah hewan berubah
                const jumlahHewanInput = document.getElementById('jumlah-hewan');
                if (jumlahHewanInput) {
                    jumlahHewanInput.addEventListener('input', function() {
                        const jumlahHewan = parseInt(this.value) || 0;
                        generateAnimalForms(jumlahHewan); // Perbarui form saat input berubah
                    });
                }
            </script>
        @endpush
</x-app-layout>
