<?php

namespace App\Http\Livewire;

use App\Models\OfertaEmpleo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Search extends Component
{
    public $usuarioActual;
    public $ofertasEmpleo;
    public $descripcion;
    public $buscador;
    public $salario;
    public $campoOrden = "id";
    public $sentido = "desc";

    public function ordenar($orden)
    {
        $this->campoOrden = $orden === 'puesto_id' ? 'puesto_id' : 'id';
        $this->sentido = $this->sentido === 'asc' ? 'desc' : 'asc';
    }

    public function mount()
    {
        $this->usuarioActual = Auth::user();
        $this->ofertasEmpleo = OfertaEmpleo::all();
        $this->buscador = "";
        //$this->campoOrden = "";
    }
    public function render()
    {

        $ofertas_empleo = OfertaEmpleo::where('descripcion', 'like', '%' . $this->buscador . '%')
            ->orWhereHas('puesto', function ($query) {
                $query->where('nombre', 'like', '%' . $this->buscador . '%');
            })
            ->orWhereHas('empresa', function ($query) {
                $query->where('nombre', 'like', '%' . $this->buscador . '%');
            })
            ->orderBy($this->campoOrden, $this->sentido)
            ->get();


        return view(
            'livewire.search',
            [
                "ofertas_empleo" => $ofertas_empleo
            ]
        );
    }
}
