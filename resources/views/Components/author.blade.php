<div class="container-author">
    <img class="author-image" src="/img/{{ $post->author->avatar }}">
    <div>
        <span>written By</span>
        <strong><a href="/?author={{ $post->author->username }}&{{ http_build_query(request()->except('author')) }}">{{$post->author->name}}</a></strong>
    </div>
</div>