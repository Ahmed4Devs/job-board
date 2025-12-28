<x-layout :title="$pageTitle">
  <h2>Tags: {{ $tag->title }}</h2>

  <h3>Related Post</h3>
  <ul>
    @forelse ($tag->post as $post)
      <li>
        <strong>{{ $post->title }}</strong>
        <p>{{ $post->body }}</p>
        <p>Author: {{ $post->author }}</p>
        <a href="{{ route('blog.show', $post->id) }}">View Full Post</a>
      </li>
    @empty
      <p>No posts are associated with this tag.</p>
    @endforelse
  </ul>
</x-layout>
