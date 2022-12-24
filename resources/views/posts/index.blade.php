<div>
    <h1>TUTTI I POSTS</h1>

    @foreach ( $posts as $post )

        <p>{{ $post->title }}</p>

    @endforeach

</div>
