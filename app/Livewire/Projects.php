<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public $projects=['portfolio', 'cv', 'clinicoeurs'];
    public function render()
    {
        return view('livewire.projects');
    }
}
