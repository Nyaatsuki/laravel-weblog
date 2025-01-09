<x-layout>
    <div class="content">
        <form method="POST" action="/get-premium" enctype="multipart/form-data">
            @csrf
            <h1>Become cool, buy Premium today!
                <br>
                with features such as:
            </h1>
            <ul>
                <li>More Articles</li>
                <li>Literally nothing else. What do you expect this is a blog. Do you think we're gonna include a streaming service or something.</li>
            </ul>
            <h3>Only €3,99 a month</h2>
                <h6>(Currently free of charge)</h6>
            <button name="premium-btn" value="1" type="submit" class="cat-sub">Buy Now!</button>
        </form>
    </div>

    <x-footer></x-footer>
</x-layout>