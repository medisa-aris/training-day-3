<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditParentForm extends Component
{
    public User $parent;

    function mount() {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag)->getMessages());
    }

    public function render()
    {
        return view('livewire.edit-parent-form');
    }
}
