<div class="p-16 flex justify-center gap-6 items-center">
    <button wire:click='increment' class="py-2 px-4 bg-red-600 rounded-2xl text-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click='decrement' class="py-2 px-4 bg-red-600  rounded-2xl text-white">-</button>
</div>
