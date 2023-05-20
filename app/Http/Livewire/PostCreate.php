<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{

    public function submintForm(){

        Session::flash('success', 'El archivo se eliminó correctamente.');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}

