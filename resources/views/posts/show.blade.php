<!-- SHOW SINGLE POST -->

<p>Categoria: <a href="#">{{ $post->category->name }}</a></p>

<p>{{ $post->title }}</p>
<p>Pubblicato il {{ $post->created_at }}<span> da <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></span></p>

<p>{{ $post->excerpt }}</p>
<p>{{ $post->body }}</p>