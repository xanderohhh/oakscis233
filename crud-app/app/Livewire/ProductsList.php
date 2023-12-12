<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductsList extends Component
{
    public $q = '';

    public function searchProducts(){

    }

    public function cancel(){
        $this->q = '';
    }
    public function render()
    {
        if ($this->q == ''){
             $products = Product::paginate(10);
        } else {
            $products = Product::where('name', 'like', '%' . $this->q . '%')
            ->orWhere('description', 'like', '%' . $this->q  . '%')
            ->orWhere('item_number', 'like', '%' . $this->q  . '%')
            ->get();
        }
       
        return view('livewire.products-list', [
            'products' => $products
        ]);
    }
}
