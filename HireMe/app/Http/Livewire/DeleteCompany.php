<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class DeleteCompany extends Component
{
    public $all_companies;
    public function deleteCompany($id)
    {
        $company = Company::findOrfail($id);
        $company->delete();
    }
    public function render()
    {
        return view('livewire.delete-company', ['all_companies' => $this->all_companies]);
    }
}
