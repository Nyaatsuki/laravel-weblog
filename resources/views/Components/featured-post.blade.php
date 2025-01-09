@props(['post'])
<article>
    <img src="{{ $post->image }}" " class="featured-img">
    <div class="featured-text">
        <div class="container-title">
            <h3>{{$post->title}}</h3>
            <span>published <time>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</time></span>
        </div>
        <x-container-categories :post="$post" />
        <div class="container-excerpt">
            {!! $post->excerpt !!}
        </div>
        <x-container-footer :post='$post' />
    </div>
</article>