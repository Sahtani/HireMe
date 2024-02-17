<?php

namespace App\Http\Livewire;

use App\Models\Jobseeker;
use Livewire\Component;

class DeleteJobseeker extends Component
{
    public $all;
    public $jobseekerId;
    public function deleteJobseeker($id)
    {
        $jobseeker = Jobseeker::findOrfail($id);
        // dd($jobseeker);
        $jobseeker->delete();
    }
    public function render()
    {
        return view('livewire.delete-jobseeker', [
            'all' => $this->all
        ]);
    }
}
