@if ($paginator->hasPages())
    <nav class="flex items-center justify-between rounded-lg p-4 shadow-md" role="navigation"
        aria-label="{{ __('Pagination Navigation') }}">
        <div class="flex flex-1 justify-between sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex cursor-default items-center rounded-md border border-blue-300 bg-blue-100 px-4 py-2 text-sm font-medium leading-5 text-blue-500">
                    {{ __('Sebelumnya') }} <!-- Mengganti {!! __('pagination.previous') !!} -->
                </span>
            @else
                <a class="relative inline-flex items-center rounded-md border border-blue-300 bg-blue-100 px-4 py-2 text-sm font-medium leading-5 text-blue-700 hover:bg-blue-200 focus:outline-none focus:ring active:bg-blue-300"
                    href="{{ $paginator->previousPageUrl() }}">
                    {{ __('Sebelumnya') }} <!-- Mengganti {!! __('pagination.previous') !!} -->
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a class="relative ml-3 inline-flex items-center rounded-md border border-blue-300 bg-blue-100 px-4 py-2 text-sm font-medium leading-5 text-blue-700 hover:bg-blue-200 focus:outline-none focus:ring active:bg-blue-300"
                    href="{{ $paginator->nextPageUrl() }}">
                    {{ __('Berikutnya') }} <!-- Mengganti {!! __('pagination.next') !!} -->
                </a>
            @else
                <span
                    class="relative ml-3 inline-flex cursor-default items-center rounded-md border border-blue-300 bg-blue-100 px-4 py-2 text-sm font-medium leading-5 text-blue-500">
                    {{ __('Berikutnya') }} <!-- Mengganti {!! __('pagination.next') !!} -->
                </span>
            @endif
        </div>

        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm leading-5 text-primary">
                    {!! __('Menampilkan') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('hingga') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('dari') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('hasil') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex rounded-md shadow-sm rtl:flex-row-reverse">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('Sebelumnya') }}">
                            <span
                                class="relative inline-flex cursor-default items-center rounded-l-md border border-blue-300 bg-blue-100 px-2 py-2 text-sm font-medium leading-5 text-blue-500"
                                aria-hidden="true">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a class="relative inline-flex items-center rounded-l-md border border-blue-300 bg-blue-100 px-2 py-2 text-sm font-medium leading-5 text-blue-500 hover:bg-blue-200 focus:outline-none"
                            href="{{ $paginator->previousPageUrl() }}" aria-label="{{ __('Sebelumnya') }}"
                            rel="prev">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span
                                    class="relative -ml-px inline-flex cursor-default items-center border border-blue-300 bg-blue-100 px-4 py-2 text-sm font-medium leading-5 text-blue-700">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span
                                            class="relative -ml-px inline-flex cursor-default items-center border border-blue-300 bg-blue-200 px-4 py-2 text-sm font-medium leading-5 text-blue-500">{{ $page }}</span>
                                    </span>
                                @else
                                    <a class="relative -ml-px inline-flex items-center border border-blue-300 bg-blue-100 px-4 py-2 text-sm font-medium leading-5 text-blue-700 hover:bg-blue-200 focus:outline-none"
                                        href="{{ $url }}"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a class="relative -ml-px inline-flex items-center rounded-r-md border border-blue-300 bg-blue-100 px-2 py-2 text-sm font-medium leading-5 text-blue-500 hover:bg-blue-200 focus:outline-none"
                            href="{{ $paginator->nextPageUrl() }}" aria-label="{{ __('Berikutnya') }}" rel="next">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('Berikutnya') }}">
                            <span
                                class="relative -ml-px inline-flex cursor-default items-center rounded-r-md border border-blue-300 bg-blue-100 px-2 py-2 text-sm font-medium leading-5 text-blue-500"
                                aria-hidden="true">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
