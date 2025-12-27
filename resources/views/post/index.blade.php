<x-layout :title="$pageTitle">
  <h2>Blog Page</h2>
  @foreach ($posts as $post)
    <h1 class="text-2xl">{{ $post->title }}</h1>
    <p class="text-xl">{{ $post->author }}</p>
    <p>{{ $post->body }}</p>
  @endforeach

  {{ $posts->links() }}
</x-layout>
