<x-layout>
    <section class="article-creator">
        <form method="POST" action="/posts/{{$post->slug}}/edit" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" id="title" name="title" placeholder="Title" value="{{ $post->title }}">
            <select name="categories" class="create-dropdown" id="categories" value="{{ $post->category_id }}">@foreach ($categories->all() as $category)
                <option value="{{ $category->id }}" id="categories" name="categories">{{$category->name}}</option>
                @endforeach
                </p>
                <textarea name="body" id="body">{{ str_replace(array('<p>','</p>'), "", $body) }}</textarea>
                <p>@foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </p>
                <button class="submit-btn" type="submit">&#128428;
                    <span class="article-tooltip">Save your article
                        <div></div>
                    </span></button>
        </form>
        <form action="/posts/{{$post->slug}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="del-btn" value="Delete">&#x2715;
                <span class="article-tooltip">Delete your article
                    <div></div>
                </span></button>
        </form>

    </section>
</x-layout>