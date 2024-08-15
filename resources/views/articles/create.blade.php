<!--TODO: Images and category selection-->

<x-layout>
    <section class="article-creator">
        <form method="POST" action="/create-article">
            @csrf
            <input type="text" id="title" name="title" placeholder="Title">
            <textarea name="body" id="body" placeholder="Post Body"></textarea>
            <p>@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </p>
            <button class="submit-btn" type="submit">&#128428;
                <span class="article-tooltip">Save your article
                    <div></div>
                </span></button>
        </form>
    </section>
</x-layout>