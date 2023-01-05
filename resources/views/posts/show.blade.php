<!-- SHOW SINGLE POST -->
<x-fardelli.layout>

    <p>Categoria: <a href="/posts/?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    <p>{{ $post->title }}</p>
    <p>Pubblicato il {{ $post->created_at }}<span> da <a href="/posts/?author={{ $post->author->username }}">{{ $post->author->name }}</a></span></p>

    <p>{{ $post->excerpt }}</p>
    <p>{{ $post->body }}</p>

</x-fardelli.layout>