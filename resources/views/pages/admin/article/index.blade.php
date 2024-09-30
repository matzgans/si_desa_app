<x-app-layout>
    <div class="pt-4">
        <div class="max-w-full px-3 sm:px-6 lg:px-8">
            <div class="mb-3 flex justify-between rounded-lg bg-secondary p-4 text-white shadow-lg">

                <h2>Data Article</h2>
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
                @if (Session::has('success'))
                    <div class="mb-4 flex w-full max-w-full items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-success" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('success') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-success" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @elseif(Session::has('error'))
                    <div class="mb-4 flex w-full max-w-xs items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-danger" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('error') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-danger" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                <div class="mb-2 flex flex-col items-center sm:flex-row">
                    <form class="mb-2 w-full sm:mb-0 sm:me-2" action="{{ route('admin.article.index') }}"
                        method="GET">
                        <label class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="default-search">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="default-search" name="search" type="search" value="{{ request('search') }}"
                                placeholder="Nama Sekolah" />
                            <button
                                class="absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="submit">Search</button>
                        </div>
                    </form>

                    <a class="mb-2 w-full rounded-lg bg-green-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 sm:mb-0 sm:me-2 sm:w-auto"
                        href="{{ route('admin.article.create') }}">
                        <svg class="mx-auto h-6 w-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 12h14m-7 7V5" />
                        </svg>
                    </a>
                    {{-- export --}}
                    {{-- <a class="mb-2 w-full rounded-lg bg-red-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-300 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-300 dark:hover:bg-red-500 dark:focus:ring-red-300 sm:mb-0 sm:me-2 sm:w-auto"
                        href="{{ route('admin.export.article') }}">
                        <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m2.665 9H6.647A1.647 1.647 0 0 1 5 15.353v-1.706A1.647 1.647 0 0 1 6.647 12h1.018M16 12l1.443 4.773L19 12m-6.057-.152-.943-.02a1.34 1.34 0 0 0-1.359 1.22 1.32 1.32 0 0 0 1.172 1.421l.536.059a1.273 1.273 0 0 1 1.226 1.718c-.2.571-.636.754-1.337.754h-1.13" />
                        </svg>

                    </a> --}}
                </div>


                <div class="relative overflow-x-auto">
                    <table
                        class="w-full border-collapse border border-gray-300 text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="border border-gray-300 px-6 py-3" scope="col">No</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Thumbnail</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Title</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Content</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Tanggal Di Buat</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Tanggal Di ubah</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Status</th>
                                <th class="border border-gray-300 px-6 py-3" scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                    <th class="whitespace-nowrap border border-gray-300 px-6 py-4 font-medium text-gray-900 dark:text-white"
                                        scope="row">
                                        {{ ($articles->currentPage() - 1) * $articles->perPage() + $loop->iteration }}
                                    </th>
                                    <td class="border border-gray-300 px-6 py-4">
                                        <img class="h-20 w-20 object-cover"
                                            src="{{ asset('article/thumb/' . $article->thumbnail) }}" alt="">
                                    </td>
                                    <td class="border border-gray-300 px-6 py-4">{{ $article->title }}</td>
                                    <td class="border border-gray-300 px-6 py-4">{{ $article->content }}</td>
                                    <td class="border border-gray-300 px-6 py-4">
                                        {{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}


                                    </td>
                                    <td class="border border-gray-300 px-6 py-4">
                                        {{ \Carbon\Carbon::parse($article->updated_at)->translatedFormat('d F Y') }}


                                    </td>
                                    <td class="border border-gray-300 px-6 py-4">
                                        <form
                                            action="{{ route('admin.update.article.status', ['article' => $article->slug]) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <label class="inline-flex cursor-pointer items-center">
                                                <input class="peer sr-only" name="is_show" type="checkbox"
                                                    value="1" {{ $article->is_show == 1 ? 'checked' : '' }}
                                                    onchange="this.checked ? this.value = 1 : this.value = 0; this.form.submit()">
                                                <!-- Toggle value antara 1 dan 0 -->
                                                <div
                                                    class="peer relative h-6 w-11 rounded-full bg-gray-200 after:absolute after:start-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rtl:peer-checked:after:-translate-x-full dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                                                </div>
                                            </label>
                                        </form>

                                    </td>
                                    <td class="border border-gray-300 px-6 py-4">
                                        <div class="flex items-center">

                                            <a
                                                href="{{ route('admin.article.edit', ['article' => $article->slug]) }}">
                                                <svg class="size-6 text-yellow-500 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                </svg>


                                            </a>
                                            <a href="javascript:void(0);"
                                                onclick="confirmDelete('{{ $article->slug }}', '{{ addslashes($article->title) }}')">
                                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="red">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </a>

                                            <form id="delete-form-{{ $article->slug }}" style="display: none;"
                                                action="{{ route('admin.article.destroy', ['article' => $article->slug]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $articles->links('vendor.pagination.tailwind') }}
                </div>
            </div>
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
        </script>
    @endpush
</x-app-layout>
