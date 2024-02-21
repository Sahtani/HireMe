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
            "offers" => ModelsJobOffer::where('title', 'like', $searchItem)
                ->orWhere('type_contrat', 'like', $searchItem)
                ->orWhere('location', 'like', $searchItem)
                ->orWhereHas('skills', function ($query) use ($searchItem) {
                    $query->where('name', 'like', '%' . $searchItem . '%');
                })
                ->get()
        ]);
    }
}
