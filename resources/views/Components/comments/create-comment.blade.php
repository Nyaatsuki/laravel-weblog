<section class="comment-creator">
    <!-- TODO: Functionality to comment form, keep in mind comments need to be unique to their post -->
    <form method="POST" action="/comment" enctype="multipart/form-data">
        @csrf
        <textarea name="comment-text" id="comment-text" placeholder="Type your comment here" rows="3"></textarea>
        <input type="hidden" name="post-id" id="post-id" value="{{ $post->id }}">
        <button>Reply</button>
        <p style="color:red;">@foreach ($errors->all() as $error)
            <a>{{ $error }}</a>
            @endforeach
    </form>
</section>