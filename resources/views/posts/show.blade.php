<!-- SHOW SINGLE POST -->

<p>Categoria: <a href="#">{{ $post->category->name }}</a></p>

<p>{{ $post->title }}</p>
<p>Pubblicato il {{ $post->created_at }}<span> da <a href="#">{{ $post->author->name }}</a></span></p>

<p>{{ $post->excerpt }}</p>
<p>{{ $post->body }}</p>