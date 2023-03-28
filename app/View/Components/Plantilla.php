<?php

namespace App\View\Components;

use Closure;
use App\Models\Acero; 

//componente = Plantilla
//modelo = Acero

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Plantilla extends Component
{
    public $acero;

    public function __construct($acero)
    {
        $this->acero = $acero;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.plantilla');
    }
}