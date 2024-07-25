<div class="header">
    <div class="title">
        <a href="/">
            <h1>Programmer's Syphon</h1>
        </a>
        <p>Code written by a fool</p>
    </div>
    <div class="login">
        @guest
        <div class="login-button">
            <a href="/login">Login</a>
        </div>
        <div>
            <a href="/register">Register</a>
        </div>
        @endguest
        @auth
        <!--TODO: Decide between profile image dropdown or logout + article create button-->
        <div class="avatar">
            <a href="/?author={{ auth()->user()->username }}&{{ http_build_query(request()->except('author')) }}">
                <img src="img/{{ auth()->user()->avatar }}">
            </a>
        </div>
        <!--<div>
            <form method="POST" action="/logout">
                @csrf

                <button>Sign Out</button>
            </form>
        </div>-->

        @endauth
    </div>
</div>
<div class="category-dropdown">
    @if(! Request::is('create-article'))
    <x-category-dropdown></x-category-dropdown>
    @endif
</div>