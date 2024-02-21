<?php

namespace App\Http\Livewire;

use App\Models\Jobseeker;
use Livewire\Component;

class Softdelete extends Component
{

    public $jobseekerId;

    public function deleteJobseeker($id)
    {
       
    }

    public function render()
    {
        return view('livewire.softdelete');
    }
}

