<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Company extends Component
{


    public $search = '';
    public function render()
    {
        $searchItem = '%' . $this->search . '%';
        return view('livewire.company', [
            "companies" => User::where('role','company')->where("name",'like', $searchItem)
                // ->orWhere('title', 'like', $searchItem)
                // ->orWhere('location', 'like', $searchItem)
                ->get()
        ]);
    }
}
