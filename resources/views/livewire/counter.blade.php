<div class="flex flex-col">
    <div class="">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900">{{ $count }}</h1>
    </div>
    <div class="">
        <button 
        type="button" 
        class="text-4xl focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
        wire:click="decrement"
        >-</button>
        <button 
        type="button" 
        class="text-4xl focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
        wire:click="increment"
        >+</button>
    </div>
</div>
