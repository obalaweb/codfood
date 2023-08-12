<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Menu;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class MenuPage extends Component
{
    use WithFileUploads;

    public $name;
    public $menus;
    public $price;
    public $description;
    public $thumbnail;
    public $inName = [];
    public $amount = [];
    public $ingredients = [];
    public $category_id;
    public $category;


    public function mount()
    {
        $category = Category::all();
        $this->ingredients = [
            ['ingredient_id'=> '', ]
        ];
        $this->category = $category->pluck('name', 'id');
    }

    public function render()
    {
        return view('livewire.menu-page');
    }

    protected $rules = [
        'name'        => 'required|string|min:6',
        'price'       => 'integer|required',
        'category_id' => 'required|integer',
        'description' => 'required|string',
        'thumbnail'   => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg|max:2048',
    ];

    public function addInput()
    {
        $this->ingredients[] = [
            ['ingredient_id'=> '', ]
        ];
    }

    public function saveMenu()
    {
        try {
            $input = $this->validate();

            $this->thumbnail = $input['thumbnail'];
            $menu = Menu::create($input);
            $menu->addMedia($this->thumbnail)
                ->toMediaCollection();
            foreach($this->ingredients as $ingredient) {
                    $menu->ingredients()->create($ingredient);                   
            }
            if($menu) {
                $this->resetForm();
            }

            session()->flash('success', 'Menu saved successfully');

        // redirect(route('menus.index'));
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e);
        }
        
    }

    public function updated($propertyName) 
    {
        $this->validateOnly($propertyName);
    }



    public function resetForm()
    {
        $this->name = '';
        $this->price = '';
        $this->description = '';
        $this->thumbnail = '';
        $this->amount = '';
        $this->inName = '';
        $this->category_id = '';
    }
    
}
