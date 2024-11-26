
<x-layout>
    <section class="article-creator">
        <form method="POST" action="/create-category" enctype="multipart/form-data">
            @csrf
            <input type="name" id="title" name="name" placeholder="Name">
            <p>@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </p>
            <button type="submit" class="cat-sub">Create Category</button>
        </form>
    </section>
    <x-footer></x-footer>
</x-layout>