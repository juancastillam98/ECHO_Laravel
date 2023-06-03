<?php

namespace App\Http\Livewire;

use App\Models\OfertaEmpleo;
use Livewire\Component;

class Filter extends Component
{
    public $busqueda = '';
    public $ofertas_empleo;

    public function render()
    {
        $this->ofertas_empleo = OfertaEmpleo::where('descripcion', 'LIKE', "%{$this->busqueda}%")
            ->orWhere('requisitos', 'LIKE', "%{$this->busqueda}%")
            ->get();

        return view('livewire.filter', [
            'ofertas_empleo' => $this->ofertas_empleo,
        ]);
    }
}
