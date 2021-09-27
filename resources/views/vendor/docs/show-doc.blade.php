<x-html :title="$doc->title">
    <div class="w-full max-w-7xl mx-auto flex">
        <aside
            x-data
            x-bind:class="{
                'translate-x-0': $store.menu.open,
                '-translate-x-full': ! $store.menu.open,
            }"
            class="w-64 border-r flex-shrink-0 h-screen lg:translate-x-0 flex flex-col fixed lg:sticky top-0 z-20 transition bg-white -translate-x-full"
        >
            <header class="bg-gradient-to-l from-gray-200 pb-px w-full">
                <div class="h-16 bg-white flex items-center px-4">
                    <a
                        class="font-bold text-lg font-heading"
                        href="{{ route('repositories') }}"
                    >Flowframe</a>
                </div>
            </header>

            <nav class="flex-1 overflow-y-auto p-4 sm:py-6 md:py-8">
                <ul class="space-y-6">
                    @foreach ($categories as $categoryTitle => $categoryDocs)
                        <li>
                            <h2 class="text-sm text-gray-500 font-bold font-heading">
                                {{ $categoryTitle }}
                            </h2>

                            <ul class="mt-2 space-y-1 text-sm font-medium">
                                @foreach ($categoryDocs as $categoryDoc)
                                    <li>
                                        <a
                                            class="inline-block px-2 py-1 rounded-lg text-gray-600 hover:bg-gray-50"
                                            href="{{ route('repositories.doc', [$repository->name, $categoryDoc->slug]) }}"
                                        >
                                            {{ $categoryDoc->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </aside>

        <div class="flex-grow min-w-0">
            <header class="bg-gradient-to-r from-gray-200 pb-px w-full sticky top-0 z-10">
                <div class="px-4 sm:px-6 md:px-8 h-16 bg-white flex items-center justify-between">
                    <p class="font-bold text-lg font-heading">{{ $repository->name }}</p>

                    <a
                        title="Open repository in GitHub"
                        target="_blank"
                        href="{{ $repository->url }}"
                    >
                        <svg
                            class="w-6 h-6"
                            aria-hidden="true"
                            viewBox="0 0 16 16"
                            data-view-component="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                            />
                        </svg>
                    </a>
                </div>
            </header>

            <main class="p-4 sm:p-6 md:p-8">
                <h1 class="text-3xl lg:text-4xl font-bold tracking-tight font-heading">{{ $doc->title }}</h1>

                <x-markdown
                    class="mt-8 prose"
                    theme="github-dark"
                >{!! $doc->content !!}</x-markdown>

                <footer class="mt-8 border-t pt-4">
                    <a
                        class="text-sm text-gray-500"
                        target="_blank"
                        href="{{ "{$repository->url}/blob/master/docs/{$doc->slug}.md" }}"
                    >Edit on GitHub</a>
                </footer>
            </main>
        </div>
    </div>

    <div
        x-data
        x-show="$store.menu.open"
        class="fixed inset-0 bg-black/50 z-10 lg:hidden"
        x-on:click="$store.menu.open = false"
        x-transition.opacity
    ></div>

    <button
        class="fixed bottom-0 right-0 m-3 bg-gray-900 z-30 text-white shadow-md w-14 h-14 rounded-full flex items-center justify-center lg:hidden"
        x-data
        x-on:click="$store.menu.open = !$store.menu.open"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 8h16M4 16h16"
            />
        </svg>
    </button>
</x-html>
