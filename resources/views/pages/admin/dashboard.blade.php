<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Grid Section -->
            <div class="grid w-full grid-cols-3 gap-6">
                <!-- Card Penduduk -->
                <div class="bg-primary-100 overflow-hidden rounded-lg shadow-lg shadow-primary">
                    <div class="text-primary-900 flex items-center justify-around p-6">
                        <svg class="h-12 w-12 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <div class="text-3xl font-bold">{{ $resident }}</div>
                        <div class="text-xl font-bold">Penduduk</div>
                    </div>
                </div>
                <div class="bg-primary-100 overflow-hidden rounded-lg shadow-lg shadow-orange-600">
                    <div class="text-primary-900 flex items-center justify-around p-6">
                        <svg class="h-12 w-12 text-orange-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                        </svg>

                        <div class="text-3xl font-bold">{{ $dusun }}</div>
                        <div class="text-xl font-bold">Dusun</div>
                    </div>
                </div>
                <div class="bg-primary-100 overflow-hidden rounded-lg shadow-lg shadow-pink-500">
                    <div class="text-primary-900 flex items-center justify-around p-6">
                        <svg class="h-12 w-12 text-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="curren    tColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023" />
                        </svg>


                        <div class="text-3xl font-bold">{{ $article }}</div>
                        <div class="text-xl font-bold">Article</div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="mt-12 grid grid-cols-2 gap-6">
                <!-- Bar Chart -->
                <div class="rounded-lg bg-white p-6 shadow-lg">
                    <h2 class="mb-4 text-xl font-semibold">Statistik Tingkat Pendidikan Penduduk Menurut Tingkatan
                        Pendidikan
                    </h2>
                    <canvas id="barChart"></canvas>
                </div>

                <!-- Line Chart -->
                <div class="rounded-lg bg-white p-6 shadow-lg">
                    <h2 class="mb-4 text-xl font-semibold">Grafik Pertumbuhan</h2>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart
        var labels = {!! json_encode(array_keys($totals)) !!}; // Mengambil key dari array sebagai label
        var dataValues = {!! json_encode(array_values($totals)) !!}; // Mengambil value dari array sebagai data
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Penduduk',
                    data: dataValues,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Line Chart
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Laki - Laki', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Pertumbuhan Penduduk',
                    data: [10, 20, 30, 40, 50],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
