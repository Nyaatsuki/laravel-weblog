@props(['post'])
<article class="post-container">
    <img src="https://i.redd.it/bm2svk0ndu771.jpg" class="small-img">
    <div class="container-title">
        <h3>{{$post->title}}</h3>
        <span>published <time>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</time></span>
    </div>
    <div class="container-excerpt">
        {!! $post->excerpt !!}
    </div>
    <div class="container-footer">
        <div class="container-author">
            <em><strong>
                    <p>Written By </p>
                    <a href="/">{{$post->author->name}}</a>
                </strong></em>
        </div>
        <a href="/" class="read-btn">
            <span>Read More</span>
        </a>
    </div>
</article>