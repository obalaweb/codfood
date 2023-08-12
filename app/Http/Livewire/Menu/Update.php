<?php

namespace App\Http\Livewire\Menu;

use App\Models\Category;
use Livewire\Component;

class Update extends Component
{
    public $menu;
    public $name;
    public $price;
    public $description;
    public $amount;
    public $thumbnail;

    public function render()
    {
        return view('livewire.menu.update', [
            'menu' => [
                'id' => $this->menu->id,
                'name' => $this->menu->name,
                'price' => $this->menu->price,
                'description' => $this->menu->description,
                'amount' => $this->menu->amount,
                'thumbnail' => $this->menu->thumbnail,
            ],
            'category'  => Category::pluck('name', 'id'),
        ]);
    }

    public function updateMenu()
    {
    // Get the menu from the database.
    $menu = Menu::find($this->menu->id);

    // Update the menu properties.
    $menu->price = $this->price;
    $menu->description = $this->description;
    $menu->amount = $this->amount;
    $menu->thumbnail = $this->thumbnail;

    // Save the menu to the database.
    $menu->save();

    // Redirect to the menus page.
    return redirect(route('menus.index'));
    }
}
