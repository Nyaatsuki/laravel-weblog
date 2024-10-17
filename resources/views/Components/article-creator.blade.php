@auth
@if(Request::is('/'))
<div class="create-article">
    <span class="article-tooltip">Write a new article
        <div></div>
    </span>
    <a href="/create-article">+</a>
</div>
@endif
@endauth