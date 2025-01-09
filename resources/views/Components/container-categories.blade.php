@props(['post'])
<div class="container-categories">
    @if($post->premium_content)
    <a href="/get-premium">Premium</a>
    @endif
    <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category')) }}">{{$post->category->name}}</a>
</div>