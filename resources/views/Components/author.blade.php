<div class="container-author">
    <img class="author-image" src="{{ $post->author->avatar }}">
    <div>
        <span>Written By</span>
        <strong><a href="/?author={{ $post->author->username }}&{{ http_build_query(request()->except('author')) }}">{{$post->author->name}}</a></strong>
    </div>
</div>