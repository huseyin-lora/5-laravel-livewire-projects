<div class="">
    <div class="flex flex-col w-[300px] mx-auto py-16 gap-4 justify-between">
        <input type="text" wire:model='todoText' wire:keydown.enter='addTodo' placeholder="Type and hit enter"
            class="flex-1 rounded border-2 border-indigo-500/50 hover:border-indigo-500/80 active:border-indigo-500/100">

        <button
            class="py-2 px-4 bg-green-600 hover:bg-green-700 text-white rounded disabled:cursor-not-allowed disabled:opacity-90 "
            wire:click='addTodo'>
            Add
        </button>

        <div class="py-6">
            @if (count($todos) == 0)
                <p class="text-gray-400 prose dark:prose-invert">No todos yet</p>
            @endif

            @foreach ($todos as $index => $todo)
                <div class="flex gap-4 justify-between items-center py-1">
                    <input type="checkbox" {{ $todo->completed ? 'checked' : '' }}
                        wire:change='toggleTodo({{ $todo->id }})'>
                    <label class="flex-1 {{ $todo->completed ? 'line-through' : '' }}">{{ $todo->todo }}</label>
                    <button class="bg-red-600 rounded hover:bg-red-700 text-white p-2" wire:click='deleteTodo({{ $todo->id }})'>
                        DELETE
                    </button>
                </div>
            @endforeach
        </div>
{{-- use HEROICONS --}}
    </div>
</div>
