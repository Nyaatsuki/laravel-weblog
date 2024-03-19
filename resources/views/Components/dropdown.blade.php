@props(['trigger'])

<div x-data="{ show: false}" @click.away="show = false">
    {{-- Trigger --}}

    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    
    {{-- Links --}}
    <div x-show="show" style="display: none">
        {{ $slot }}
    </div>
</div>