<?php

namespace App\Http\Livewire;

use App\Models\JobOffer;
use Livewire\Component;

class DeleteOffer extends Component
{
    public $all_offers;
    public function deleteOffer($id)
    {
        $company = JobOffer::findOrfail($id);
        $company->delete();
    }
    public function render()
    {
        return view('livewire.delete-offer', ['all_offers' => $this->all_offers]);
    }
}
