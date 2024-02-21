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
        $jobseeker = Jobseeker::with('user')->findOrfail($id);
        $jobseeker->delete();
    }
    public function render()
    {
        return view('livewire.delete-jobseeker', [
            'all' => $this->all
        ]);
    }
}
