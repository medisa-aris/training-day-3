<?php

namespace App\Livewire;

use Livewire\Component;

class ListClassesTable extends Component
{
    function mount() {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag)->getMessages());
    }
    
    public function render()
    {
        return view('livewire.list-classes-table');
    }
}
