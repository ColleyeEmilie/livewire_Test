<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class UsersList extends Component
{
    public $username = '';  //toutes les propriétés publiques sont disponibles dans le template.
    #[computed]
     public function users(){
         return $this->username? User::where('name', 'like','%'.$this->username.'%')->get() : new Collection();
     }

     public function newUser(){

     }
}
