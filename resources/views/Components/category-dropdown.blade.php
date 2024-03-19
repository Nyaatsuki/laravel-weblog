<x-dropdown>
    <x-slot name="trigger">
        <button class = "dropdown-button">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <span> &#x25BC;</span>

        </button>
    </x-slot>
    <x-dropdown-item href="/" 
    :active="request()->routeIs('/')">
    All</x-dropdown-item>

    @foreach ($categories as $category)
    <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}" 
    :active='request()->is("categories/{$category->slug}")'>
    {{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>