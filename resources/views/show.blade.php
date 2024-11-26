<title>Programmer's Syphon | <?= $post->title; ?></title>
<x-layout>
    <div class="show-container">
        <img src="{{ $post->image }}" class="small-img">
        <h1 class="show-title">{{$post->title}}</h1>
        <span>published <strong><time>{{ \Carbon\Carbon::parse($post->published_at)->Format('F jS, Y') }}</time></strong></span>
        <div class="show-category">
            <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category')) }}">{{$post->category->name}}</a>
        </div>
        <div>
            {!! $post->body !!}
        </div>
        <br>
        @auth
        @if(Auth()->user()->username == $post->author->username)
        <div>
            <a class="read-btn" href="/posts/{{$post->slug}}/edit">edit<a>
        </div>
        @endif
        @endauth
        <x-author :post="$post" />
    </div>
    @auth
    <x-comments.create-comment :post="$post"></x-comments.create-comment>
    @endauth
    <x-show-comments :post="$post"></x-show-comments>
    <x-footer></x-footer>
</x-layout>