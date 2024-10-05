<div class="w-full bg-primary text-gray-700" x-data="{ open: false }">
    <div class="mx-auto flex max-w-screen-xl flex-col px-8 md:flex-row md:items-center md:justify-between">
        <div class="flex flex-row items-center justify-between py-6">
            <div class="relative md:mt-8">
                <a class="focus:shadow-outline relative z-50 rounded-lg text-lg font-extrabold tracking-widest text-yellow-500 focus:outline-none"
                    href="{{ route('landing.index') }}">Desa
                    Uabanga</a>

            </div>
            <button class="focus:shadow-outline rounded-lg focus:outline-none md:hidden" @click="open = !open">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav class="flex h-0 flex-grow origin-top scale-y-0 flex-col pb-4 duration-300 md:flex md:h-auto md:flex-row md:items-center md:justify-end md:pb-0"
            :class="{ 'transform md:transform-none': !open, 'h-full': open }">
            <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm text-white hover:text-black focus:outline-none md:ml-4 md:mt-8"
                href="{{ route('landing.index') }}#visi-misi">Visi Misi</a>
            <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm text-white hover:text-black focus:outline-none md:ml-4 md:mt-8"
                href="{{ route('landing.index') }}#program-unggulan">Program Unggulan</a>
            <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm text-white hover:text-black focus:outline-none md:ml-4 md:mt-8"
                href="{{ route('landing.profile') }}">Profil Desa</a>
            <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm text-white hover:text-black focus:outline-none md:ml-4 md:mt-8"
                href="{{ route('landing.article') }}">Artikel</a>
            <a class="mt-2 rounded-full bg-secondary px-10 py-3 text-center text-sm text-white md:ml-4 md:mt-8"
                href="{{ route('login') }}">Login</a>
        </nav>
    </div>
</div>
