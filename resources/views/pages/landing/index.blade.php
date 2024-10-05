<x-landing-layout>
    <div class="bg-primary">
        <div class="mx-auto flex max-w-screen-xl flex-col items-start px-8 pb-20 pt-10 lg:flex-row">
            <!--Left Col-->
            <div
                class="mb-5 flex w-full flex-col items-start justify-center text-center md:mb-0 lg:w-6/12 lg:pt-24 lg:text-left">
                <h1 class="text-darken my-4 text-5xl font-bold leading-tight text-white" data-aos="fade-right"
                    data-aos-once="true">
                    Selamat Datang Di Website Resmi Desa <span class="text-yellow-500">Uabanga</span>
                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300"
                    class="leading-normal text-2xl mb-8 text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eaque doloremque non iure nemo esse,
                    repellat illo fugit cumque corrupti nesciunt ipsam, praesentium, sequi reprehenderit tenetur.
                    Voluptatibus vitae asperiores repellendus!</p>
                <div class="w-full items-center justify-center md:flex md:space-x-5 lg:justify-start" data-aos="fade-up"
                    data-aos-once="true" data-aos-delay="700">
                    <a href="#visi-misi"
                        class="lg:mx-0 bg-secondary text-yellow-500 text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out z-50">
                        Visi Misi
                    </a>
                </div>
            </div>
            <!--Right Col-->
            <div class="relative w-full lg:-mt-10 lg:w-6/12" id="girl">
                <img class="mx-auto w-10/12 2xl:-mb-20" data-aos="fade-up" data-aos-once="true"
                    src="{{ asset('landing/images/kepala-desa.png') }}" />
            </div>
        </div>
        <div class="relative z-40 -mt-14 text-white sm:-mt-24 lg:-mt-36">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="-mt-px h-20 w-full bg-white"></div>
        </div>
    </div>

    <div class="container mx-auto max-w-screen-xl overflow-x-hidden px-4 text-gray-700 lg:px-8">
        <!-- trusted by -->
        <div class="mx-auto max-w-4xl">
            <h1 class="mb-3 text-center font-medium text-gray-400">Bekerja Sama Dengan</h1>
            <div class="flex justify-center gap-20 overflow-auto pt-10">
                <img class="h-32" src="{{ asset('landing/images/logo-bonebol.png') }}">
                <img class="h-32" src="{{ asset('landing/images/logo-bonebol.png') }}">
                <img class="h-32" src="{{ asset('landing/images/logo-bonebol.png') }}">
            </div>
        </div>
    </div>

    <!-- Visi Misi. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24" id="visi-misi">
        <h1 class="font-bold text-darken my-3 text-2xl text-yellow-500">Visi Misi Desa <span
                class="text-secondary">Uabanga</span>
        </h1>
        <p class="leading-relaxed text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus hic
            assumenda accusamus dicta at dolorum repellendus, soluta necessitatibus, asperiores sint magnam. Quam
            impedit porro asperiores adipisci excepturi, molestiae dolorum non!.</p>
    </div>
    <!-- card -->
    <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20 lg:px-52 bg-gray-100 lg:py-10">
        @foreach ($visionsMissions as $data)
            <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div
                    class="rounded-full w-16 h-16 flex p-10 items-center bg-primary justify-center mx-auto shadow-lg transform -translate-y-12">
                    <p class="text-white font-semibold">Visi <br>& <br>Misi</p>
                </div>
                <div class="text-justify">
                    <h1 class="text-darken mb-3 text-xl text-gray-500 font-medium lg:px-14"><span
                            class="text-black">Visi : </span>
                        {{ $data->visi }}</h1>
                    <h1 class="text-darken mb-3 text-xl text-gray-500 font-medium lg:px-14"><span
                            class="text-black">Misi : </span>
                        {{ $data->misi }}</h1>
                </div>
            </div>
        @endforeach

    </div>

    <!-- Program Unggulan. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24 " id="program-unggulan">
        <h1 class="font-bold text-darken my-3 text-2xl text-yellow-500">Program Unggulan Desa <span
                class="text-secondary">Uabanga</span>
        </h1>
        <p class="leading-relaxed text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus
            hic
            assumenda accusamus dicta at dolorum repellendus, soluta necessitatibus, asperiores sint magnam. Quam
            impedit porro asperiores adipisci excepturi, molestiae dolorum non!.</p>
    </div>

    @foreach ($priorityPrograms as $index => $data)
        @if ($index % 2 !== 0)
            <!-- Cek jika indeks sekarang ganjil -->
            <div class="mt-10 items-center px-10 sm:flex sm:space-x-8 lg:ml-56">
                <div class="relative sm:w-1/2" data-aos="fade-right">
                    <div class="absolute -left-4 -top-3 z-0 h-12 w-12 animate-pulse rounded-full bg-primary"></div>
                    <h1 class="text-darken relative z-50 text-2xl font-semibold lg:pr-10">{{ $data->program_name }}</h1>
                    <p class="py-5 lg:pr-32">{{ $data->description }}</p>
                </div>
                <div class="relative mt-10 sm:mt-0 sm:w-1/2" data-aos="fade-right">
                    <img class="lg:size-6/12 relative z-40 rounded-xl"
                        src="{{ asset('landing/images/logo-bonebol.png') }}" alt="">
                </div>
            </div>
        @else
            <!-- Jika indeks sekarang genap -->
            <div class="sm:flex items-center sm:space-x-8 mt-10 px-10 lg:px-56 flex-row-reverse bg-gray-100 lg:py-10">
                <div class="relative sm:w-1/2" data-aos="fade-right">
                    <div class="absolute -left-4 -top-3 z-0 h-12 w-12 animate-pulse rounded-full bg-primary"></div>
                    <h1 class="text-darken relative z-50 text-2xl font-semibold lg:pr-10">{{ $data->program_name }}
                    </h1>
                    <p class="py-5 lg:pr-32">{{ $data->description }}</p>
                </div>
                <div class="relative mt-10 sm:mt-0 sm:w-1/2" data-aos="fade-right">
                    <img class="lg:size-6/12 relative z-40 rounded-xl"
                        src="{{ asset('landing/images/logo-bonebol.png') }}" alt="">
                </div>
            </div>
        @endif
    @endforeach



    {{-- data --}}
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold ">Data Desa <span class="text-primary">Uabanga</span></h1>
        <p class="text-gray-500 my-5 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            deserunt
            sunt
            maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
            sapiente quis reprehenderit voluptates?</p>
    </div>

    <div class="flex flex-wrap gap-4 text-center justify-center">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="data-penduduk">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Molestiae rem saepe nisi, necessitatibus sequi eveniet ipsam unde rerum hic nobis
                    fugiat et nesciunt ea aliquam atque dolor eaque illum! Aliquam.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="data-transportasi">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="data-peternakan">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>


    </div>

    <div class="flex flex-wrap gap-4 text-center justify-center mt-10">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="data-sarana">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Molestiae rem saepe nisi, necessitatibus sequi eveniet ipsam unde rerum hic nobis
                    fugiat et nesciunt ea aliquam atque dolor eaque illum! Aliquam.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="kondisi-rumah">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="alat-komunikasi">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>


    </div>

    <div class=" mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800 mx-10 lg:mx-52 mt-10"
        id="data-pencaharian">
    </div>

    <div class=" mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800 mx-10 lg:mx-52 mt-10"
        id="data-pendidikan">
    </div>

    <div class=" mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800 mx-10 lg:mx-52 mt-10"
        id="data-usaha">
    </div>

    {{-- artikel --}}
    @if ($articles->count() > 0)
        <div data-aos="zoom-in" class="mt-16 text-center">
            <h1 class="text-darken text-2xl font-semibold">Artikel</h1>
            <p class="text-gray-500 my-5 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                deserunt
                sunt
                maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
                sapiente quis reprehenderit voluptates?</p>
        </div>
    @endif
    <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20  px-10 lg:px-56">
        @foreach ($articles as $article)
            <div class="lg:w-6/12">
                <img class="w-full mb-6 rounded-xl" src="{{ asset('article/thumb/' . $article->thumbnail) }}"
                    alt="{{ $article->title }}" loading="lazy">
                <span
                    class="bg-yellow-500 text-darken font-semibold px-4 py-px text-sm rounded-full">{{ $article->created_at }}</span>
                <h1 class="text-gray-800 font-semibold my-3 text-xl">{{ $article->title }}</h1>
                <p class="text-gray-500 mb-3">{{ Str::limit($article->content, 30) }}</p>
                <a href="{{ route('article.detail', ['slug' => $article->slug]) }}" class="underline">Baca
                    Selengkapnya</a>
            </div>
        @endforeach
    </div>


    {{-- lokasi --}}
    <div class="mt-16 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Lokasi Desa <span class="text-primary">Uabanga</span></h1>
        <p class="my-5 text-gray-500 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            deserunt
            sunt
            maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
            sapiente quis reprehenderit voluptates?</p>
    </div>

    <div class="flex justify-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9371.740248108725!2d123.22794951495842!3d0.3518814485727207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327f305ce7385549%3A0xe8803f8102fa990b!2sUabanga%2C%20Kec.%20Bonepantai%2C%20Kabupaten%20Bone%20Bolango%2C%20Gorontalo!5e1!3m2!1sid!2sid!4v1727452556426!5m2!1sid!2sid"
            style="border:0;" width="1000" height="450" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('data-penduduk', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Jumlah Penduduk per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
                crosshair: true
            },
            yAxis: [{
                min: 0,
                title: {
                    text: 'Jumlah Penduduk'
                }
            }, {
                title: {
                    text: 'Jumlah KK'
                },
                opposite: true
            }],
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Laki-laki',
                data: [104, 171, 89, 142]
            }, {
                name: 'Perempuan',
                data: [87, 164, 88, 131]
            }, {
                name: 'Jumlah KK',
                yAxis: 1,
                type: 'spline',
                data: [56, 99, 52, 74],
                tooltip: {
                    valueSuffix: ' KK'
                }
            }]
        });

        Highcharts.chart('data-transportasi', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Alat Transportasi per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($villages),
                crosshair: true
            },
            yAxis: [{
                min: 0,
                title: {
                    text: 'Jumlah Kendaraan'
                }
            }, {
                title: {
                    text: 'Jumlah Pemilik'
                },
                opposite: true
            }],
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Mobil',
                data: @json($transportationStats['carCounts'])
            }, {
                name: 'Motor',
                data: @json($transportationStats['motorcycleCounts'])
            }, {
                name: 'Bentor',
                data: @json($transportationStats['bentorCounts'])
            }, {
                name: 'Pemilik Mobil',
                type: 'spline',
                yAxis: 1,
                data: @json($transportationStats['carOwners']),
                tooltip: {
                    valueSuffix: ' orang'
                }
            }, {
                name: 'Pemilik Motor',
                type: 'spline',
                yAxis: 1,
                data: @json($transportationStats['motorcycleOwners']),
                tooltip: {
                    valueSuffix: ' orang'
                }
            }, {
                name: 'Pemilik Bentor',
                type: 'spline',
                yAxis: 1,
                data: @json($transportationStats['bentorOwners']),
                tooltip: {
                    valueSuffix: ' orang'
                }
            }]
        });


        Highcharts.chart('data-peternakan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Peternakan per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Hewan'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Sapi',
                data: [0, 0, 3, 1]
            }, {
                name: 'Kambing',
                data: [48, 1, 4, 19]
            }, {
                name: 'Anjing',
                data: [0, 0, 0, 1]
            }, {
                name: 'Kucing',
                data: [0, 0, 0, 9]
            }, {
                name: 'Ayam',
                data: [72, 47, 48, 57]
            }, {
                name: 'Itik',
                data: [0, 0, 0, 0]
            }]
        });

        Highcharts.chart('data-pencaharian', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Mata Pencaharian per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
                crosshair: true,
                accessibility: {
                    description: 'Dusun'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Penduduk'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'NELAYAN',
                data: [29, 50, 6, 5]
            }, {
                name: 'PETANI',
                data: [15, 20, 21, 42]
            }, {
                name: 'SWASTA',
                data: [5, 11, 6, 9]
            }, {
                name: 'HONORER',
                data: [6, 6, 3, 3]
            }, {
                name: 'PNS',
                data: [1, 2, 1, 2]
            }, {
                name: 'BURUH HARIAN',
                data: [1, 7, 5, 10]
            }, {
                name: 'TUKANG BANGUNAN',
                data: [4, 8, 0, 0]
            }, {
                name: 'ASISTEN RT',
                data: [1, 0, 0, 0]
            }, {
                name: 'LAINNYA',
                data: [11, 0, 14, 26]
            }]
        });

        Highcharts.chart('data-pendidikan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Tingkat Pendidikan per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($villages),
                crosshair: true,
                accessibility: {
                    description: 'Dusun'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Penduduk'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    grouping: false,
                    shadow: false,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'TIDAK/BELUM SEKOLAH (L)',
                color: 'rgba(158, 159, 163, 0.9)',
                data: @json($educationStats['belumSekolahL']),
                pointPadding: 0.3,
                pointPlacement: -0.2
            }, {
                name: 'TIDAK/BELUM SEKOLAH (P)',
                color: 'rgba(158, 159, 163, 0.5)',
                data: @json($educationStats['belumSekolahP']),
                pointPadding: 0.4,
                pointPlacement: -0.2
            }, {
                name: 'TAMAT SD/SEDERAJAT (L)',
                color: 'rgba(54, 162, 235, 0.9)',
                data: @json($educationStats['tamatSDL']),
                pointPadding: 0.3,
                pointPlacement: -0.1
            }, {
                name: 'TAMAT SD/SEDERAJAT (P)',
                color: 'rgba(54, 162, 235, 0.5)',
                data: @json($educationStats['tamatSDP']),
                pointPadding: 0.4,
                pointPlacement: -0.1
            }, {
                name: 'TAMAT SMP/SEDERAJAT (L)',
                color: 'rgba(255, 206, 86, 0.9)',
                data: @json($educationStats['tamatSMPL']),
                pointPadding: 0.3,
                pointPlacement: 0
            }, {
                name: 'TAMAT SMP/SEDERAJAT (P)',
                color: 'rgba(255, 206, 86, 0.5)',
                data: @json($educationStats['tamatSMPP']),
                pointPadding: 0.4,
                pointPlacement: 0
            }, {
                name: 'TAMAT SMA/SEDERAJAT (L)',
                color: 'rgba(75, 192, 192, 0.9)',
                data: @json($educationStats['tamatSMAL']),
                pointPadding: 0.3,
                pointPlacement: 0.1
            }, {
                name: 'TAMAT SMA/SEDERAJAT (P)',
                color: 'rgba(75, 192, 192, 0.5)',
                data: @json($educationStats['tamatSMAP']),
                pointPadding: 0.4,
                pointPlacement: 0.1
            }, {
                name: 'TAMAT PT (L)',
                color: 'rgba(153, 102, 255, 0.9)',
                data: @json($educationStats['tamatPTL']),
                pointPadding: 0.3,
                pointPlacement: 0.2
            }, {
                name: 'TAMAT PT (P)',
                color: 'rgba(153, 102, 255, 0.5)',
                data: @json($educationStats['tamatPTP']),
                pointPadding: 0.4,
                pointPlacement: 0.2
            }]
        });

        Highcharts.chart('data-usaha', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Usaha Ekonomi Masyarakat per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($economyStats['villages']), // Nama dusun dari village_name
                crosshair: true,
                accessibility: {
                    description: 'Dusun'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Usaha'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} usaha</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'PERTOKOAN',
                data: @json($economyStats['pertokoan'])
            }, {
                name: 'PERKIOSAN',
                data: @json($economyStats['perkiosan'])
            }, {
                name: 'RM OWNER',
                data: @json($economyStats['rm_owner'])
            }, {
                name: 'PERBENGKELAN',
                data: @json($economyStats['perbengkelan'])
            }, {
                name: 'MEBEL KAYU',
                data: @json($economyStats['mebel'])
            }, {
                name: 'PANGKALAN LPG',
                data: @json($economyStats['pangkalanLPG'])
            }, {
                name: 'TAYLOR',
                data: @json($economyStats['taylor'])
            }, {
                name: 'LAINNYA',
                data: @json($economyStats['lainnya'])
            }]
        });


        Highcharts.chart('data-sarana', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Sarana & Prasarana Perikanan per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tambatan Perahu',
                data: [13, 7, 0, 3]
            }, {
                name: 'Pasar Ikan',
                data: [0, 1, 0, 0]
            }, {
                name: 'Pajeko',
                data: [0, 0, 0, 0]
            }, {
                name: 'Kapal Ikan',
                data: [0, 0, 0, 0]
            }, {
                name: 'Perahu Bodi',
                data: [0, 0, 0, 0]
            }, {
                name: 'Mesin Tempel',
                data: [7, 8, 0, 3]
            }, {
                name: 'Katintin',
                data: [12, 0, 0, 1]
            }]
        });

        Highcharts.chart('alat-komunikasi', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Kepemilikan Alat Komunikasi per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pemilik'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Televisi',
                data: [15, 17, 13, 28]
            }, {
                name: 'Parabola',
                data: [13, 14, 6, 15]
            }, {
                name: 'Handphone',
                data: [79, 68, 69, 72]
            }, {
                name: 'Radio',
                data: [1, 0, 0, 0]
            }]
        });

        Highcharts.chart('kondisi-rumah', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Kondisi Tempat Tinggal per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Rumah'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Atap - Genteng',
                data: [33, 31, 21, 33]
            }, {
                name: 'Atap - Seng',
                data: [0, 0, 0, 0]
            }, {
                name: 'Atap - Rumbia',
                data: [32, 31, 21, 31]
            }, {
                name: 'Dinding - Semen',
                data: [1, 0, 0, 2]
            }, {
                name: 'Dinding - Kayu',
                data: [0, 0, 0, 0]
            }, {
                name: 'Lantai - Semen',
                data: [19, 11, 9, 17]
            }, {
                name: 'Lantai - Keramik',
                data: [14, 20, 12, 16]
            }]
        });
    </script>
</x-landing-layout>
