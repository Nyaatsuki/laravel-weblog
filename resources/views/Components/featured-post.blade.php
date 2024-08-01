@props(['post'])
<article>
    <img src="/img/{{ $post->image }}" " class="featured-img">
    <div class="featured-text">
        <div class="container-title">
            <h3>{{$post->title}}</h3>
            <span>published <time>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</time></span>
        </div>
        <div class="container-categories">
            <a href="posts/{{$post->slug}}">Featured</a>
            <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category')) }}">{{$post->category->name}}</a>
        </div>
        <div class="container-excerpt">
            {!! $post->excerpt !!}
        </div>
        <x-container-footer :post='$post' />
    </div>
</article>