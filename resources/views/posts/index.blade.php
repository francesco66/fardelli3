<div>
    <h1>TUTTI I POSTS</h1>

    @foreach ( $posts as $post )

        <p>{{ $post->title }}</p>
        <p>Pubblicato il {{ $post->created_at }}<span> da {{ $post->user->name }}</span></p>

        <p>{{ $post->excerpt }}</p>
        <p>{{ $post->body }}</p>

        <a href="posts/{{ $post->id }}">LEGGI</a>
    @endforeach

</div>
