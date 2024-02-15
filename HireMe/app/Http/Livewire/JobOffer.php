<?php

namespace App\Http\Livewire;

use App\Models\JobOffer as ModelsJobOffer;
use Livewire\Component;

class JobOffer extends Component
{   
    public $search='';
    public function render()
    {
        $searchItem = '%'. $this->search .'%';
        return view('livewire.job-offer', [
            "offers" => ModelsJobOffer::where("title", $searchItem)
            ->orWhere('type_contrat', 'like', $searchItem)
            ->orWhere('location', 'like', $searchItem)
            ->get()
        ]);
    }
}
