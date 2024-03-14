@props(['post'])
<article>
    <img src="https://i.redd.it/bm2svk0ndu771.jpg" class="featured-img">
    <div class="featured-text">
        <div class="container-title">
            <h3>{{$post->title}}</h3>
            <span>published <time>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</time></span>
        </div>
        <div class="container-categories">
            <a href="posts/{{$post->slug}}">Featured</a>
        </div>
        <div class="container-excerpt">
            {!! $post->excerpt !!}
        </div>
        <div class="container-footer">
            <div class="container-author">
                <img class="author-image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png">
                <div>
                    <span>written By</span>
                    <strong><a>{{$post->author->name}}</a></strong>
                </div>
            </div>
            <a href="posts/{{$post->slug}}" class="read-btn">
                Read More
            </a>
        </div>
    </div>
</article>