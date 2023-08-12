<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-white rounded-lg sm:mr-10 p-10 flex flex-col">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">All Categories</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Add the dish ingredients here</p>           
        <div class="">
            <table class="table w-full table-striped">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-gray-300 text-center">#</th>
                        <th class="px-4 py-2 text-gray-300 text-center">Name</th>
                        <th class="px-4 py-2 text-gray-300 text-center">Menus</th>
                        <th class="px-4 py-2 text-gray-300 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th class="px-4 py-2">{{ $loop->index + 1 }}</th>
                        <th class="px-4 py-2">{{ $category->name }}</th>
                        <th class="px-4 py-2">{{ $category->menus->count() }}</th>
                        <th class="px-4 py-2">Delete</th>
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 p-3">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">New Category</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Add new category here</p>
        <form method="POST" id="CategoryForm">
            @csrf
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <input type="text" id="name" name="name" wire:model="name" class="w-full bg-white rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button wire:click.prevent="submit()" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 w-full rounded text-lg">Add More</button>
            <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
        </form> 
      </div>
    
    </div>
  </section>