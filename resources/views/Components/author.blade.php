<div class="container-author">
    <img class="author-image" src="{{ $post->author->avatar }}">
    <div>
        @auth

        @if ( auth()->user()->id === $post->author->id )
        <span>You wrote this,</span>
        @else
        <span>Written By</span>
        @endif

        @endauth

        @guest
        <span>Written By</span>
        @endguest
        
        <strong><a href="/?author={{ $post->author->username }}&{{ http_build_query(request()->except('author')) }}">{{$post->author->name}}</a></strong>
    </div>
</div>