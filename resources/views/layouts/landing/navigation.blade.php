<div x-data="{ open: false }" class="w-full text-gray-700 bg-primary">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
        <div class="flex flex-row items-center justify-between py-6">
            <div class="relative md:mt-8">
                <a href="{{ route('landing.index') }}"
                    class="text-lg relative z-50 font-extrabold tracking-widest text-yellow-500 rounded-lg focus:outline-none focus:shadow-outline">Desa
                    Uabanga</a>

            </div>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }"
            class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
            <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 text-white hover:text-black focus:outline-none focus:shadow-outline"
                href="{{ route('landing.index') }}#visi-misi">Visi Misi</a>
            <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 text-white hover:text-black focus:outline-none focus:shadow-outline"
                href="{{ route('landing.index') }}#program-unggulan">Program Unggulan</a>
            <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 text-white hover:text-black focus:outline-none focus:shadow-outline"
                href="{{ route('landing.profile') }}">Profil Desa</a>
            <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 text-white hover:text-black focus:outline-none focus:shadow-outline"
                href="{{ route('landing.article') }}">Artikel</a>
            <a class="px-10 py-3 mt-2 text-sm text-center bg-secondary text-white rounded-full md:mt-8 md:ml-4"
                href="{{ route('login') }}">Login</a>
        </nav>
    </div>
</div>
