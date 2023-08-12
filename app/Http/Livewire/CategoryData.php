<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryData extends Component
{
    public $name;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string',
        ]);

        $response = $this->callApi('category.store', [
            'name' => $this->name,
        ]);

        if($response->status === 200)
        {
            $this->refresh();
        }
    }
    public function render()
    {
        return view('livewire.category');
    }

    public function refresh()
    {
        $this->emit('refresh');
    }
}
