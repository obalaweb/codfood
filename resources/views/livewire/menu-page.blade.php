<section class="text-gray-600 body-font relative">
    @if (session()->has('success'))
        <div class="alert bg-green-600 text-white rounded-sm p-3 right-0 w-2/12">{{ session('success') }}</div>
    @endif

    <div class="container px-5 py-10 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-white rounded-lg sm:mr-10 p-10 flex flex-col">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">New Menu</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Add the dish ingredients here</p>
        <form wire:submit.prevent="saveMenu()">           
        <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" wire:model="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative mb-4">
            <label for="category" class="leading-7 text-sm text-gray-600">Category</label>
            <select id="category" wire:model="category_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-yellow-500 focus:border-yellow-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehoder-gray-400 dark-text-white dark:focus:ring-blue-500" name="category_id">
                @foreach ($category as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative mb-4">
            <label for="price" class="leading-7 text-sm text-gray-600">Price</label>
            <input type="integer" wire:model="price" id="price" name="price" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('price')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative mb-4">
            <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
            <textarea id="description" name="description" wire:model='description' class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <div class="relative mb-4">
            @if ($thumbnail)
                <img class="image" src="{{ $thumbnail->temporaryUrl() }}">
            @endif
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
            <input name="thumbnail" wire:model="thumbnail" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="thumbnail_help" id="thumbnail" type="file">
            <!--<label for="thumbnail" class="leading-7 text-sm text-gray-600">Thumbnail</label>
            <input type="thumbnail" type="file" wire:model="thumbnail" id="thumbnail" name="thumbnail" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            --> </div>
            @error('thumbnail')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <br />
        <button type="submit" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Save Menu</button>
        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
    </div>
      <x-dynamic-menu-inputs :ingredients="$ingredients" />
    </form> 
    </div>
  </section>