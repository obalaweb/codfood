<div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 p-3 overflow-y-auto min-h-80 max-h-100">
    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Ingredients</h2>
    <p class="leading-relaxed mb-5 text-gray-600">Add the dish ingredients here</p>
    @foreach ($ingredients as $index => $ingredient )
        <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" wire:model="ingredients.{{ $index  }}.name" name="name[]" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
            <label for="amount" class="leading-7 text-sm text-gray-600">Amount</label>
            <input type="amount" wire:model="ingredients.{{ $index }}.amount" name="anount[]" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <hr class="h-40 text-yellow-800" />
    @endforeach
    <button wire:click.prevent="addInput()" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Add More</button>
    <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
  </div>