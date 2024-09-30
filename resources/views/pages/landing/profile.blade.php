<x-landing-layout>
    <!-- Profile. -->
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Sejarah Desa <span class="text-primary">Uabanga</span></h1>
        <p class="text-gray-500 my-5 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            deserunt
            sunt
            maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
            sapiente quis reprehenderit voluptates?</p>
    </div>

    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold mb-5">Struktur Desa <span class="text-primary">Uabanga</span></h1>
        <div class=" flex  justify-center">
            <img src="{{ asset('landing/images/struktur-desa.webp') }}" alt="struktur-desa" loading="lazy"
                class="px-20" width="1000">
        </div>
    </div>

    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Aparat Pemerintah Desa <span class="text-primary">Uabanga</span>
        </h1>
        <p class="text-gray-500 my-5 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            deserunt
            sunt
            maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
            sapiente quis reprehenderit voluptates?</p>

        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($currentVillageHead as $currentVillageHead)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div href="#">
                        <img class="w-full h-96 object-cover rounded-t-lg"
                            src="{{ asset('structure/staff_profile/' . $currentVillageHead->staff_photo) }}"
                            alt="" />
                    </div>
                    <div class="p-5">
                        <div href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $currentVillageHead->staff_name }}
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Kepala Desa</p>
            @endforeach
        </div>
    </div>

    @foreach ($employees as $employee)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div href="#">
                <img class="w-full h-96 object-cover rounded-t-lg"
                    src="{{ asset('structure/staff_profile/' . $employee->staff_photo) }}" alt="" />
            </div>
            <div class="p-5">
                <div href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $employee->staff_name }}
                    </h5>
                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $employee->position }}
                </p>

            </div>
        </div>
    @endforeach

    </div>

    </div>


    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Daftar Kepala Desa <span class="text-primary">Uabanga</span></h1>
        <p class="text-gray-500 my-5 lg:px-96">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
            deserunt
            sunt
            maxime modi dicta atque id aspernatur cumque error voluptas, enim debitis aliquid. Incidunt omnis facere
            sapiente quis reprehenderit voluptates?</p>

        <div class="flex flex-wrap justify-center gap-4">

            @foreach ($formerVillageHeads as $formerVillageHead)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div href="#">
                        <img class="w-full h-96 object-cover rounded-t-lg"
                            src="{{ asset('structure/staff_profile/' . $formerVillageHead->staff_photo) }}"
                            alt="" />
                    </div>
                    <div class="p-5">
                        <div href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $formerVillageHead->staff_name }}
                            </h5>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $formerVillageHead->staff_description }}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>

    </div>


</x-landing-layout>
