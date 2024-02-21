<?php

namespace App\Http\Livewire;

use App\Models\Company as ModelsCompany;
use App\Models\User;
use Livewire\Component;

class Company extends Component
{


    public $search = '';
    public function render()
    {
        $searchItem = '%' . $this->search . '%'; {
            $searchItem = '%' . $this->search . '%';
            return view('livewire.company', [
                "companies" => User::whereHas('company', function ($query) use ($searchItem) {
                    $query->where('name', 'like', $searchItem);
                })->get()
            ]);
        }
    }
}
