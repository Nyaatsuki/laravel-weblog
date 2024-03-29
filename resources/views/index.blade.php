<x-layout>
    <div class="content">
        @if($posts->count())
        <div class="featured-post-container">
            <x-featured-post :post="$posts[0]" />
        </div>
        <div class="card-grid">
            @Foreach ($posts->skip(1) as $post)
            <div class="{{$loop->iteration < 3 ? 'grid-col-3' : 'grid-col-2'}}">
                <x-post :post="$post" />
            </div>
            @endforeach
        </div>
        @else
        <a>No posts yet, come back later!</a>
        @endif
    </div>

    <x-footer></x-footer>
</x-layout>