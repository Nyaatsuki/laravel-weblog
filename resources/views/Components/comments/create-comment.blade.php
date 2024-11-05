<section class="comment-creator">
<!-- TODO: Functionality to comment form -->
    <form method="POST" action="/posts/{{$post->slug}}" enctype="multipart/form-data">
        <textarea name="comment-text" id="comment-text" placeholder="Type your comment here" rows="3"></textarea>
        <button>Reply</button>
    </form>
</section>