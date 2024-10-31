<title>Programmer's Syphon | <?= $post->title; ?></title>
<x-layout>
    <div class="show-container">
        <img src="{{ $post->image }}" class="small-img">
        <h1 class="show-title">{{$post->title}}</h1>
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
    <x-footer></x-footer>
</x-layout>