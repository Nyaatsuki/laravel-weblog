@props(['post'])
<div class="container-categories">
    <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category')) }}">{{$post->category->name}}</a>
</div>