<x-fardelli.layout>

    <div>

        <div class="bg-slate-200 flex gap-4">

            <!-- CATEGORIE -->
            <div class="relative bg-gray-100 rounded-xl px-3 py-2" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">

                <button @click="open = ! open">Categorie</button>

                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-32 rounded-md shadow-lg" style="display: none;" @click="open = false">
                    <div class="rounded-md ring-1 ring-black ring-opacity-5">
                        <div><a href="">1</a></div>
                        <div><a href="">2</a></div>
                        <div><a href="">3</a></div>
                    </div>
                </div>
            </div>

            <!-- RICERCA PER PAROLA -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="/posts">
                    @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" name="search" placeholder="Ricerca..." class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search') }}">
                </form>
            </div>

        </div>

        <h1>TUTTI I POSTS</h1>

        @foreach ( $posts as $post )

        <p>{{ $post->title }}</p>
        <p>Pubblicato il {{ $post->created_at }}<span> da <a href="/posts/?author={{ $post->author->username }}">{{ $post->author->name }}</a></span></p>
        <p>Categoria: <a href="/posts/?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>
        <p>{{ $post->body }}</p>

        <a href="/posts/{{ $post->id }}">LEGGI</a>

        @endforeach

    </div>

</x-fardelli.layout>