<title>Programmer's Syphon | <?= $post->title; ?></title>
<x-layout>
    <div class="show-container">
        <img src="{{ $post->image }}" class="small-img">
        <h1 class="show-title">{{$post->title}}</h1>
        <span>published <strong><time>{{ \Carbon\Carbon::parse($post->published_at)->Format('F jS, Y') }}</time></strong></span>
        <div class="show-category">
            @if($post->premium_content)
                <a href="/get-premium">Premium</a>
            @endif
            <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category')) }}">{{$post->category->name}}</a>
        </div>
        <div>
            @guest
                @if($post->premium_content == 1)
                    <h2> You must have a premium account to access this content!</h2>
                @else
                    {!! $post->body !!}
                @endif
            @endguest

            @auth
                @if($post->premium_content == 1)
                <!-- TODO: overweeg om evt. een custom blade tag te maken om op premium access te controleren
                 (via de appserviceprovider) -->
                    @if(Auth()->user()->premium_access == 1)
                        {!! $post->body !!}
                    @else
                        <h2> Uh Oh! you don't have premium! get it <a href="/get-premium">now!</a></h2>
                    @endif
                @else
                    {!! $post->body !!}
                @endif
            @endauth
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