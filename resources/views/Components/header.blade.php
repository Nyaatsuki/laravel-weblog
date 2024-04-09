<div class="header">
    <div class="title">
        <a href="/">
            <h1>Programmer's Syphon</h1>
        </a>
        <p>Code written by a fool</p>
    </div>
    <div class="login">
        @guest
        <div>
            <a href="/login">Login</a>
        </div>
        <div>
            <a href="/register">Register</a>
        </div>
        @endguest
        @auth
        <!--TODO: Decide between profile image dropdown or logout + article create button-->
        <div>
            <form method="POST" action="/logout">
                @csrf

                <button>Sign Out</button>
            </form>
        </div>
        @endauth
    </div>
</div>
<div class="category-dropdown">
    @if(! Request::is('create-article'))
    <x-category-dropdown></x-category-dropdown>
    @endif
</div>