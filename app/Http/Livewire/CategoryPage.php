<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryPage extends Component
{
    public $name = '';
    public $categories;
    public $categorySeleted;

    public function mount()
    {
        $this->refresh(); // Refresh the table on component mount
    }

    public function submit()
    {
        $input = $this->validate([
            'name' => 'required|string',
        ]);
        if($this->categorySeleted) {
            $category = Category::find($this->categorySeleted->id);
            $category->name = $this->name;
            if($category->update()) {
                $this->resetForm();
                $this->refresh();
            }
        }else {
            $response = Category::create($input);
            if($response)
            {
                $this->resetForm();
                $this->refresh();
            }
        }
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        if($category) {
            $this->name = $category->name;
            $this->categorySeleted = $category;
        }   
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();

            $this->refresh();
        }
    }


    public function render()
    {
        return view('livewire.category-page');
    }
    public function refresh()
    {
        $this->categories = Category::all();
        $this->emit('refresh');
    }

    public function resetForm()
    {
        $this->name = '';
        $this->categorySeleted   = null;
    }
}
