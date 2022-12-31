<!-- SHOW SINGLE POST -->

<p>Categoria: {{ $post->category->name }}</p>

<p>{{ $post->title }}</p>
<p>Pubblicato il {{ $post->created_at }}<span> da {{ $post->author->name }}</span></p>

<p>{{ $post->excerpt }}</p>
<p>{{ $post->body }}</p>