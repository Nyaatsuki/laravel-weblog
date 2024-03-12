<title>Programmer's Syphon | <?= $post->title; ?></title>
<x-layout>
    <div class="show-container">
        <h1>{{$post->title}}</h1>
        <div>
            {!! $post->body !!}
        </div>
        <div class="container-author">
            <img class="author-image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png">
            <div>
                <span>written By&nbsp</span>
                <strong><a>{{$post->author->name}}</a></strong>
            </div>
        </div>
    </div>
    </div>
</x-layout>