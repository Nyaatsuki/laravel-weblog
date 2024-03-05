<x-layout>
    <x-header></x-header>

    <!--TODO: Foreach logic to display posts-->
    <div class="content">
        <x-featured-post></x-featured-post>
        <div class="grid-col-2">
            <x-post></x-post>
            <x-post></x-post>
        </div>
        <div class="grid-col-3">
            <x-post></x-post>
            <x-post></x-post>
            <x-post></x-post>
        </div>
        <!--<a>No posts yet, come back later!</a>-->
    </div>

    <x-footer></x-footer>
</x-layout>