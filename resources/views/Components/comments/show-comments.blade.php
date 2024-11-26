@props(['post'])
<section class="comment-section">
    <!-- TODO: Load comments from Database -->
    @foreach ($comments as $comment)
    @if($post->id == $comment->post_id)
    <div class="comment">
        <p>{{$comment->body}}</p>
        <div>
            <img class="author-image" src='{{ $comment->author->avatar }}'>
            <span>Written By
                <strong>
                    <a>{{$comment->author->name}}</a>
                </strong>
            </span>
        </div>
    </div>
    @endif
    @endforeach
</section>