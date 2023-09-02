<div>


    <div class="flex flex-col items-center">
        <div class="flex p-32 mx-auto justify-center items-center gap-4">


            <input type="number" class="w-4/12 rounded" wire:model='number1' placeholder="Number 1">
            <select class="w-2/12" wire:model='action'>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" class="w-4/12 rounded" wire:model='number2' placeholder="Number 2">


            <button wire:click='calculate' class="w-2/12 h-10 text-lg by-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white">
                {{ $disabled ? 'disabled' : '='  }} 
            </button>

            <p class="text-3xl">
                {{ $result }}
            </p>
        </div>
    </div>

</div>
