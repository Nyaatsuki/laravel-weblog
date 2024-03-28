@auth
@if(! Request::is('create-article'))
<div class="create-article">
    <a href="/create-article">+</a>
</div>
@endif
@endauth