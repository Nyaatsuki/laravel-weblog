@props(['post'])
<x-layout>
    <section class="article-creator">
        <form method="POST" action="/create-article" enctype="multipart/form-data">
            @csrf
            <input type="text" id="title" name="title" placeholder="Title">
            <input type="file" id="image" name="image">
            <div>
                <select name="categories" class="create-dropdown" id="categories">
                    @foreach ($categories->all() as $category)
                    <option value="{{ $category->id }}" id="categories" name="categories">{{$category->name}}</option>
                    @endforeach
                </select>
                <span>|</span>
                <a class="read-btn" href="create-category">Create a Category</a>
                <span>|</span>
                <label for="Premium">
                <input type="checkbox" name="Premium" value="Premium">
                Premium Content</label>
            </div>
            <textarea name="body" id="body" placeholder="Post Body"></textarea>
            <p>@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </p>
            <button class="submit-btn" type="submit">&#x1f5ac;
                <span class="article-tooltip">Save your article
                    <div></div>
                </span></button>
        </form>
    </section>
    <x-footer></x-footer>
</x-layout>