<!-- SHOW SINGLE POST -->

<p>{{ $post->title }}</p>
<p>Pubblicato il {{ $post->created_at }}<span> da {{ $post->user->name }}</span></p>

<p>{{ $post->excerpt }}</p>
<p>{{ $post->body }}</p>