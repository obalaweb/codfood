<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $name;
    public $categories;

    public function mount()
    {
        $this->categories = App/Models/Category::all();
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
