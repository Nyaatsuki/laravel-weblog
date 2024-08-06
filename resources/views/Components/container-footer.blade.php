@props(['post'])
<div class="container-footer">
    <x-author :post="$post" />
    <a href="posts/{{$post->slug}}" class="read-btn">
        Read More
    </a>
</div>