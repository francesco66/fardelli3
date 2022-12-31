<div>
    <h1>TUTTI I POSTS</h1>

    @foreach ( $posts as $post )

        <p>{{ $post->title }}</p>
        <p>Pubblicato il {{ $post->created_at }}<span> da <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></span></p>
        <p>Categoria: <a href="#">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>
        <p>{{ $post->body }}</p>

        <a href="posts/{{ $post->id }}">LEGGI</a>
    @endforeach

</div>
