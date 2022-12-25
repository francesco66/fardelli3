<div>
    <h1>TUTTI I POSTS</h1>

    @foreach ( $posts as $post )

        <p>{{ $post->title }}</p>
        <p>Pubblicato il {{ $post->published_at }}</p><span> da {{ $post->author }}</span>
        <p>{{ $post->excerpt }}</p>
        <p>{{ $post->body }}</p>

    @endforeach

</div>
