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
        <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
            <div style="background: #5B72EE;"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <svg class="w-6 h-6 text-white" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                        fill="white" />
                </svg>
            </div>
            <h1 class="text-darken mb-3 text-xl font-medium lg:px-14">Makan Siang Gratis</h1>
            <p class="px-4 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum blanditiis
                cupiditate ipsum tempora beatae accusamus velit debitis quis eos, non aliquid vero placeat distinctio
                quia ea at repellendus, qui expedita.</p>
        </div>
        <div class="rounded-xl bg-white p-6 text-center shadow-xl" data-aos="fade-up" data-aos-delay="150">
            <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg"
                style="background: #F48C06;">
                <svg class="h-6 w-6 text-white" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
                        fill="#F5F5FC" />
                    <path
                        d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
                        fill="#F5F5FC" />
                    <path
                        d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
                        fill="#F5F5FC" />
                    <path
                        d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
                        fill="#F5F5FC" />
                    <path
                        d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
                        fill="#F5F5FC" />
                    <path
                        d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
                        fill="#F5F5FC" />
                    <path
                        d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
                        fill="#F5F5FC" />
                    <path
                        d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
                        fill="#F5F5FC" />
                    <path
                        d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
                        fill="#F5F5FC" />
                    <path
                        d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
                        fill="#F5F5FC" />
                    <path
                        d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
                        fill="#F5F5FC" />
                    <path
                        d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"
                        fill="#F5F5FC" />
                </svg>
            </div>
            <h1 class="text-darken mb-3 text-xl font-medium lg:px-14">Susu Gratis</h1>
            <p class="px-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, est mollitia
                dolorum voluptatibus blanditiis ducimus tempore earum! Expedita omnis, vero sequi dolorem nostrum illo
                est molestias veritatis nobis, eius accusamus?</p>
        </div>
        <div class="rounded-xl bg-white p-6 text-center shadow-xl" data-aos="fade-up" data-aos-delay="300">
            <div class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg"
                style="background: #29B9E7;">
                <svg class="h-6 w-6 text-white" viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"
                        fill="white" />
                </svg>
            </div>
            <h1 class="text-darken mb-3 pt-3 text-xl font-medium lg:h-14 lg:px-14">Melanjutkan Ibu Kota Nusantara</h1>
            <p class="px-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, sed autem
                repudiandae praesentium iure unde, accusamus tempora labore quos earum molestias, aliquam sapiente
                delectus tempore porro fugiat est ipsum deleniti. </p>
        </div>
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
    <div class="mt-10 items-center px-10 sm:flex sm:space-x-8 lg:ml-56">
        <div class="relative sm:w-1/2" data-aos="fade-right">
            <div class="absolute -left-4 -top-3 z-0 h-12 w-12 animate-pulse rounded-full bg-primary"></div>
            <h1 class="text-darken relative z-50 text-2xl font-semibold lg:pr-10">Makan Siang <span
                    class="text-secondary">Gratis</span></h1>
            <p class="py-5 lg:pr-32">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsa non odit amet
                quia, impedit mollitia minima sint ducimus iste vitae, dolor doloribus, fuga repellat labore. Soluta ea
                quasi placeat!.</p>
        </div>
        <div class="relative mt-10 sm:mt-0 sm:w-1/2" data-aos="fade-right">
            <img class="lg:size-6/12 relative z-40 rounded-xl" src="{{ asset('landing/images/logo-bonebol.png') }}"
                alt="">
        </div>
    </div>
    <div class="sm:flex items-center sm:space-x-8 mt-10 px-10 lg:px-56  flex-row-reverse bg-gray-100 lg:py-10">

        <div class="relative sm:w-1/2" data-aos="fade-right">
            <div class="absolute -left-4 -top-3 z-0 h-12 w-12 animate-pulse rounded-full bg-primary"></div>
            <h1 class="text-darken relative z-50 text-2xl font-semibold lg:pr-10">Tidur Siang <span
                    class="text-secondary">Gratis</span></h1>
            <p class="py-5 lg:pr-32">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsa non odit amet
                quia, impedit mollitia minima sint ducimus iste vitae, dolor doloribus, fuga repellat labore. Soluta ea
                quasi placeat!.</p>
        </div>
        <div class="relative mt-10 sm:mt-0 sm:w-1/2" data-aos="fade-right">
            <img class="lg:size-6/12 relative z-40 rounded-xl" src="{{ asset('landing/images/logo-bonebol.png') }}"
                alt="">
        </div>
    </div>
    <div class="mt-10 items-center px-10 sm:flex sm:space-x-8 lg:ml-56">
        <div class="relative sm:w-1/2" data-aos="fade-right">
            <div class="absolute -left-4 -top-3 z-0 h-12 w-12 animate-pulse rounded-full bg-primary"></div>
            <h1 class="text-darken relative z-50 text-2xl font-semibold lg:pr-10">Makan Siang <span
                    class="text-secondary">Gratis</span></h1>
            <p class="py-5 lg:pr-32">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ipsa non odit amet
                quia, impedit mollitia minima sint ducimus iste vitae, dolor doloribus, fuga repellat labore. Soluta ea
                quasi placeat!.</p>
        </div>
        <div class="relative mt-10 sm:mt-0 sm:w-1/2" data-aos="fade-right">
            <img class="lg:size-6/12 relative z-40 rounded-xl" src="{{ asset('landing/images/logo-bonebol.png') }}"
                alt="">
        </div>
    </div>

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
            <div id="chart">
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Makan Siang
                        Gratis</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="chart-2">
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Makan Siang
                        Gratis</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="chart-3">
            </div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Makan Siang
                        Gratis</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>
    </div>

    <div
        class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800 mx-10 lg:mx-52 mt-10">
        <figure
            class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h1 class="text-7xl font-semibold text-gray-900 dark:text-white">10 Orang</h1>
                <p class="my-4">If you care for your time, I hands down would go with this."</p>
            </blockquote>
        </figure>
        <figure
            class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h1 class="text-7xl font-semibold text-gray-900 dark:text-white">10 Orang</h1>
                <p class="my-4">If you care for your time, I hands down would go with this."</p>
            </blockquote>
        </figure>
        <figure
            class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h1 class="text-7xl font-semibold text-gray-900 dark:text-white">10 Orang</h1>
                <p class="my-4">If you care for your time, I hands down would go with this."</p>
            </blockquote>
        </figure>
        <figure
            class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h1 class="text-7xl font-semibold text-gray-900 dark:text-white">10 Orang</h1>
                <p class="my-4">If you care for your time, I hands down would go with this."</p>
            </blockquote>
        </figure>
    </div>

    {{-- artikel --}}
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Artikel</h1>
        <p class="text-gray-500 my-5 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            deserunt
            sunt
            maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
            sapiente quis reprehenderit voluptates?</p>
    </div>
    <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20  px-10 lg:px-56">
        <div class="lg:w-6/12">
            <img class="w-full mb-6" src="{{ asset('landing/images/laptop-news.png') }}" loading="lazy">
            <span class="bg-yellow-500 text-darken font-semibold px-4 py-px text-sm rounded-full">NEWS</span>
            <h1 class="text-gray-800 font-semibold my-3 text-xl">Class adds $30 million to its balance sheet for a
                Zoom-friendly edtech solution</h1>
            <p class="text-gray-500 mb-3">Class, launched less than a year ago by Blackboard co-founder Michael Chasen,
                integrates exclusively...</p>
            <a href="" class="underline">Read more</a>
        </div>
        <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">
            <div class="flex space-x-5">
                <div class="w-4/12">
                    <div class="relative">
                        <img class="rounded-xl w-full" src="{{ asset('landing/images/children-laptop.png') }}"
                            loading="lazy">
                        <span
                            class="absolute bottom-2 right-2 bg-yellow-500 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">PRESS
                            RELEASE</span>
                    </div>
                </div>
                <div class="w-8/12">
                    <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Class Technologies Inc. Closes $30
                        Million Series A Financing to Meet High Demand</h1>
                    <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Class Technologies Inc., the company that
                        created Class,...</p>
                </div>
            </div>
            <div class="flex space-x-5">
                <div class="w-4/12">
                    <div class="relative">
                        <img class="rounded-xl w-full" src="{{ asset('landing/images/girl-laptop.png') }}"
                            loading="lazy">
                        <span
                            class="absolute bottom-2 right-2 bg-yellow-500 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                    </div>
                </div>
                <div class="w-8/12">
                    <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Zoom’s earliest investors are betting
                        millions on a better Zoom for schools</h1>
                    <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Zoom was never created to be a consumer
                        product. Nonetheless, the...</p>
                </div>
            </div>
            <div class="flex space-x-5">
                <div class="w-4/12">
                    <div class="relative">
                        <img class="rounded-xl w-full" src="{{ asset('landing/images/cat-laptop.png') }}"
                            loading="lazy">
                        <span
                            class="absolute bottom-2 right-2 bg-yellow-500 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                    </div>
                </div>
                <div class="w-8/12">
                    <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Former Blackboard CEO Raises $16M to
                        Bring LMS Features to Zoom Classrooms</h1>
                    <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">This year, investors have reaped big
                        financial returns from betting on Zoom...</p>
                </div>
            </div>
        </div>
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
        Highcharts.chart('chart', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Egg Yolk Composition'
            },
            tooltip: {
                valueSuffix: '%'
            },
            subtitle: {
                text: 'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: [{
                        enabled: true,
                        distance: 20
                    }, {
                        enabled: true,
                        distance: -40,
                        format: '{point.percentage:.1f}%',
                        style: {
                            fontSize: '1.2em',
                            textOutline: 'none',
                            opacity: 0.7
                        },
                        filter: {
                            operator: '>',
                            property: 'percentage',
                            value: 10
                        }
                    }]
                }
            },
            series: [{
                name: 'Percentage',
                colorByPoint: true,
                data: [{
                        name: 'Water',
                        y: 55.02
                    },
                    {
                        name: 'Fat',
                        sliced: true,
                        selected: true,
                        y: 26.71
                    },
                    {
                        name: 'Carbohydrates',
                        y: 1.09
                    },
                    {
                        name: 'Protein',
                        y: 15.5
                    },
                    {
                        name: 'Ash',
                        y: 1.68
                    }
                ]
            }]
        });

        Highcharts.chart('chart-2', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Egg Yolk Composition'
            },
            tooltip: {
                valueSuffix: '%'
            },
            subtitle: {
                text: 'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: [{
                        enabled: true,
                        distance: 20
                    }, {
                        enabled: true,
                        distance: -40,
                        format: '{point.percentage:.1f}%',
                        style: {
                            fontSize: '1.2em',
                            textOutline: 'none',
                            opacity: 0.7
                        },
                        filter: {
                            operator: '>',
                            property: 'percentage',
                            value: 10
                        }
                    }]
                }
            },
            series: [{
                name: 'Percentage',
                colorByPoint: true,
                data: [{
                        name: 'Water',
                        y: 55.02
                    },
                    {
                        name: 'Fat',
                        sliced: true,
                        selected: true,
                        y: 26.71
                    },
                    {
                        name: 'Carbohydrates',
                        y: 1.09
                    },
                    {
                        name: 'Protein',
                        y: 15.5
                    },
                    {
                        name: 'Ash',
                        y: 1.68
                    }
                ]
            }]
        });

        Highcharts.chart('chart-3', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Egg Yolk Composition'
            },
            tooltip: {
                valueSuffix: '%'
            },
            subtitle: {
                text: 'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: [{
                        enabled: true,
                        distance: 20
                    }, {
                        enabled: true,
                        distance: -40,
                        format: '{point.percentage:.1f}%',
                        style: {
                            fontSize: '1.2em',
                            textOutline: 'none',
                            opacity: 0.7
                        },
                        filter: {
                            operator: '>',
                            property: 'percentage',
                            value: 10
                        }
                    }]
                }
            },
            series: [{
                name: 'Percentage',
                colorByPoint: true,
                data: [{
                        name: 'Water',
                        y: 55.02
                    },
                    {
                        name: 'Fat',
                        sliced: true,
                        selected: true,
                        y: 26.71
                    },
                    {
                        name: 'Carbohydrates',
                        y: 1.09
                    },
                    {
                        name: 'Protein',
                        y: 15.5
                    },
                    {
                        name: 'Ash',
                        y: 1.68
                    }
                ]
            }]
        });
    </script>
</x-landing-layout>
