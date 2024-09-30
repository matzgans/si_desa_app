<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Grid Section -->
            <div class="grid w-full grid-cols-4 gap-6">
                <!-- Card Penduduk -->
                <div class="bg-primary-100 overflow-hidden rounded-lg shadow-lg">
                    <div class="text-primary-900 flex items-center justify-between p-6">
                        <svg class="text-primary-500 h-12 w-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <div class="text-3xl font-bold">{{ $resident }}</div>
                        <div class="text-xl">Penduduk</div>
                    </div>
                </div>

                <!-- Card Admin -->
                <div class="overflow-hidden rounded-lg bg-white shadow-lg">
                    <div class="flex items-center justify-center p-6 text-gray-900">
                        <svg class="h-12 w-12 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 3v12m12 0v12M3 3v12m18-12v12M3 3h12M15 3h6" />
                        </svg>
                        <div class="text-2xl font-semibold">Admin</div>
                    </div>
                </div>

                <!-- Repeat similar blocks for other cards... -->
            </div>

            <!-- Charts Section -->
            <div class="mt-12 grid grid-cols-2 gap-6">
                <!-- Bar Chart -->
                <div class="rounded-lg bg-white p-6 shadow-lg">
                    <h2 class="mb-4 text-xl font-semibold">Statistik Penduduk</h2>
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
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Jumlah Penduduk Menurut Jenis',
                    data: [50, 60, 70, 80, 90],
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
