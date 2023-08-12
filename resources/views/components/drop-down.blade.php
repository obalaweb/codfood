<span @click.toggle="open = true">{{ $trigger }}</span>

<div x-data="{ open: true }">
    
    <div x-show="open" @click.outside="open = false">
        {{ $slot }}
    </div>
</div>