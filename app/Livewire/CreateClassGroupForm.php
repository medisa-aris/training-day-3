<?php

namespace App\Livewire;

use Livewire\Component;

class CreateClassGroupForm extends Component
{
    function mount() {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag)->getMessages());
    }
    public function render()
    {
        return view('livewire.create-class-group-form');
    }
}
