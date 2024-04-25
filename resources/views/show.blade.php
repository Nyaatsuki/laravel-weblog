<title>Programmer's Syphon | <?= $post->title; ?></title>
<x-layout>
    <div class="show-container">
        <h1 class="show-title" >{{$post->title}}</h1>
        <div class="show-category">
            <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category')) }}">{{$post->category->name}}</a>
        </div>
        <div>
            {!! $post->body !!}
        </div>
        <x-author :post="$post" />
    </div>
</x-layout>