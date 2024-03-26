<div class="header">
    <div class="title">
        <a href="/">
            <h1>Programmer's Syphon</h1>
        </a>
        <span>Blog blurb goes here</span>
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
    <x-category-dropdown></x-category-dropdown>
</div>