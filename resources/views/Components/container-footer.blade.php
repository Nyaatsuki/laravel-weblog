@props(['post'])
<div class="container-footer">
    @auth
    <div>
        @if ( auth()->user()->id === $post->author->id )
        <a>You wrote this!!!</a>
        @endif
    </div>
    @endauth
    <x-author :post="$post" />
    <a href="posts/{{$post->slug}}" class="read-btn">
        Read More
    </a>
</div>