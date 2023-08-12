<?php

namespace App\Http\Livewire\Menu;

use App\Models\Category;
use App\Models\Menu;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $menus;
    public $category;
    public $menu_id;

    public function mount()
    {
        $this->menus = Menu::first()->paginate(10);
        $this->menus = Menu::all();
        $this->category = Category::all();
    }

    public function render()
    {
        return view('livewire.menu.index');
    }

    public function deleteMenu($menu_id) 
    {
        $menu = Menu::find($menu_id);
        
        $menu->delete();
        
        session()->flash('message', 'Menu deleted successfully');
    }
}
