@props(['post'])
<div class="container-footer">
    <div class="container-author">
        <img class="author-image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png">
        <div>
            <span>written By</span>
            <strong><a href="?author={{ $post->author->username }}&{{ http_build_query(request()->except('author')) }}">{{$post->author->name}}</a></strong>
        </div>
    </div>
    <a href="posts/{{$post->slug}}" class="read-btn">
        Read More
    </a>
</div>