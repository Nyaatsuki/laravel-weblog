@props(['post'])
<section class="comment-section">
    <!-- TODO: Load comments from Database -->
    @foreach ($comments as $comment)
    @if($post->id == $comment->post_id)
    <div class="comment">
        <p>{{$comment->body}}</p>
        <div>
            <img class="author-image" src='{{ $comment->author->avatar }}'>
            <span><strong>Commented By</strong>
                <a>{{$comment->author->name}}</a>
            </span>
            <span><strong class="comment-time">posted</strong>
                <time>{{ \Carbon\Carbon::parse($comment->created_at)->Format('F jS, Y: G:i') }}</time>
            </span>
        </div>
    </div>
    @endif
    @endforeach
</section>