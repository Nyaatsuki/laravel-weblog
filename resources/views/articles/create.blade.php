<x-layout>
    <div class="article-creator">
        <form method="POST" action="/create-article">
            @csrf

            <label for="name">Title</label><br>
            <input type="text" id="title" name="title"><br>
            <textarea name="body" id="body"></textarea>
            <button class="submit-btn" type="submit">Save</button>
        </form>
        
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

    </div>
</x-layout>