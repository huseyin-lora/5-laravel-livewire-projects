<div class="flex flex-col w-[300px] mx-auto py-16">
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model='todoText' wire:keydown.enter='addTodo' placeholder="Type and hit enter"
            class="flex-1">

        <button
            class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded disabled:cursor-not-allowed disabled:opacity-90 "
            wire:click='addTodo'>
            Add
        </button>

        <div class="py-6">
            @if (count($todos) == 0)
                <p class="text-gray-400">No todos yet</p>
            @endif

            @foreach ($todos as $index => $todo)
                <div class="flex gap-4 justify-between items-center py-1">
                    <input type="checkbox" {{ $todo->completed ? 'checked' : '' }}
                        wire:change='toggleTodo({{ $todo->id }})'>
                    <label class="flex-1 {{ $todo->completed ? 'line-through' : '' }}">{{ $todo->todo }}</label>
                    <button wire:click='deleteTodo({{ $todo->id }})'>
                        DELETE
                    </button>
                </div>
            @endforeach
        </div>
{{-- use HEROICONS --}}
    </div>
</div>
