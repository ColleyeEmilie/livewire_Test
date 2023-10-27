<?php

namespace App\Livewire;

use App\Models\User;
use http\Message;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UsersList extends Component
{
    #[Rule('required', message: 'Un nom doit être entré!')]
    public $username = '';  //toutes les propriétés publiques sont disponibles dans le template.
    #[Rule('required', message: 'une adresse email doit être rentrée!')]
    public $email = '';

    #[computed]
     public function users(){
         return $this->username? User::where('name', 'like','%'.$this->username.'%')->get() : new Collection();
     }

     public function newUser(){
        $this->validate();
         if (!User::where('name', '=', $this->username)->exists()) {
             User::factory()->create([
                 'name' => $this->username,
                 'email' => $this->email,
             ]);
             $this->reset('username', 'email');
         }
     }
}
