@props(['title', 'imageUrl'])

<a href="#trabajos" class="w-full h-auto relative overflow-hidden group flex items-center justify-center">
    <h2 class="absolute text-5xl mb-4 z-10 [text-shadow:_0_8px_8px_rgb(00_00_000_/_1)]">{{ $title }}</h2>
    <img class="aspect-square h-full w-full transition-transform duration-300 ease-in-out group-hover:scale-110"
        src="{{ asset($imageUrl) }}" alt="">
    <div
        class="absolute inset-0 bg-gray-800 opacity-0 group-hover:opacity-50 transition-opacity duration-300 ease-in-out pointer-events-none">
    </div>
</a>