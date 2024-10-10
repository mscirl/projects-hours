<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index', [
            'projects' => $this->projects(),
        ]);
    }


    #atributo PHP#
    #[Computed()]
    
    public function projects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}
