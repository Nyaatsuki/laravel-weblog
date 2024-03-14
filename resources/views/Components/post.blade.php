@props(['post'])
<article class="post-container">
    <img src="https://i.redd.it/bm2svk0ndu771.jpg" class="small-img">
    <x-container-categories :post="$post"/>
    <div class="container-title">
        <h3>{{$post->title}}</h3>
        <span>published <time>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</time></span>
    </div>
    <div class="container-excerpt">
        {!! $post->excerpt !!}
    </div>
    <x-container-footer :post="$post"/>
</article>