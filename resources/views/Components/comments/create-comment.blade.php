<section class="comment-creator">
<!-- TODO: Functionality to comment form, keep in mind comments need to be unique to their post -->
    <form method="POST" action="/comment" enctype="multipart/form-data">
        <textarea name="comment-text" id="comment-text" placeholder="Type your comment here" rows="3"></textarea>
        <button>Reply</button>
    </form>
</section>