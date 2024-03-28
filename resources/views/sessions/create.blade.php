<title>Programmer's Syphon | Sign In</title>
<x-layout>
    <section>
        <main>
            <h1>Sign In</h1>
            <form method="POST" action="/sessions">
                @csrf

                <label for="email"> Email: </label><br>
                <input type="text" id="email" name="email" value="{{ old('email') }}"><br>
                @error('email')
                <p style="color:red; font-size:12px;">{{ $message }}</p>
                @enderror
                <label for="password"> Password: </label><br>
                <input type="password" id="password" name="password"><br>
                @error('password')
                <p style="color:red; font-size:12px;">{{ $message }}</p>
                @enderror
                <button type="submit">Submit</button>
            </form>
        </main>
    </section>
</x-layout>