<x-html>
    <main class="w-full max-w-5xl px-4 py-8 mx-auto sm:px-6 md:px-8">
        <h1 class="text-3xl font-bold">Repositories</h1>

        <ul class="grid gap-4 mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($repositories as $repository)
                <li class="p-4 rounded-lg bg-gray-50">
                    <p class="text-xs font-medium uppercase">{{ $repository->language }}</p>

                    <h2 class="text-lg font-bold font-heading">
                        <a href="{{ route('repositories.doc', $repository->name) }}">{{ $repository->fullName }}</a>
                    </h2>

                    <p class="text-sm text-gray-600">{{ $repository->description }}</p>

                    <a
                        href="{{ "{$repository->url}/blob/master/LICENSE.md" }}"
                        target="_blank"
                        class="inline-flex items-center mt-3 space-x-2 text-blue-800"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1zm-5 8.274l-.818 2.552c.25.112.526.174.818.174.292 0 .569-.062.818-.174L5 10.274zm10 0l-.818 2.552c.25.112.526.174.818.174.292 0 .569-.062.818-.174L15 10.274z"
                                clip-rule="evenodd"
                            />
                        </svg>


                        <p class="text-sm font-medium">{{ $repository->license }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
</x-html>
