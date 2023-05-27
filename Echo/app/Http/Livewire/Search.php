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
        if ($this->campoOrden == $orden) {
            if ($this->sentido == "desc") { //si al hacer click comprueba que el orden es desc, lo cambia a asc.
                $this->sentido = "asc";
                //y viceversa
            } else {
                $this->sentido = "desc";
            }
        } else {
            $this->campoOrden = $orden;
            $this->sentido = "asc";
        }
    }

    // Método encargado de inicializar las variables.
    public function mount()
    {
        $this->usuarioActual = Auth::user();
        $this->ofertasEmpleo = OfertaEmpleo::all();
        $this->buscador = "";
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

        $numOfertas = $ofertas_empleo->count();

        return view(
            'livewire.search',
            [
                "ofertas_empleo" => $ofertas_empleo,
                "numOfertas" => $numOfertas,
                "campoOrden" => $this->campoOrden,
                "sentido" => $this->sentido,
            ]
        );
    }
}
