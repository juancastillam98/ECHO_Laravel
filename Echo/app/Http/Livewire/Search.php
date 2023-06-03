<?php

namespace App\Http\Livewire;

use App\Models\OfertaEmpleo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    //protected $searchComponent;
    public $usuarioActual;
    public $ofertasEmpleo;
    public $descripcion;
    public $buscador;
    public $salario;
    public $campoOrden = "id";
    public $sentido = "desc";
    /* public $rangoSalarial; */
    public $rangoSalarialMin;
    public $rangoSalarialMax;
    public $rangoVacantes;


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

    public function updatingBuscador()
    {
        $this->resetPage();
    }

    public function actualizarRangoSalarial()
    {
        $this->ofertasEmpleo = OfertaEmpleo::where('salario', '>=', $this->rangoSalarialMin)
            ->where('salario', '<=', $this->rangoSalarialMax)
            ->get();
    }

    //método encargado de inicializar las variables antes de renderizarlo por primera vez (igual que un constructor).
    public function mount()
    {
        //$this->searchComponent = $searchComponent;

        $this->ofertasEmpleo = OfertaEmpleo::all();
        $this->buscador = "";
        /* $this->rangoSalarial = 0; */
        $this->rangoSalarialMin = 0;
        $this->rangoSalarialMax = 250000;
        $this->rangoVacantes = 0;
    }
    public function render()
    {
        $query = OfertaEmpleo::query();

        if ($this->buscador !== "") {
            $query->where(function ($q) {
                $q->where('descripcion', 'like', '%' . $this->buscador . '%')
                    ->orWhereHas('puesto', function ($query) {
                        $query->where('nombre', 'like', '%' . $this->buscador . '%');
                    })
                    ->orWhereHas('empresa', function ($query) {
                        $query->where('nombre', 'like', '%' . $this->buscador . '%');
                    });
            });
        }

        if ($this->rangoVacantes > 0) {
            $query->where('numpuestos', '<=', $this->rangoVacantes);
        }
        //TODO: añadir un if rangoSalarialMAx < x y rangoSalarialMin > x ejecutar tal query
        $query->where('salario', '>=', $this->rangoSalarialMin)
            ->where('salario', '<=', $this->rangoSalarialMax);

        $ofertasEmpleo = $query->orderBy($this->campoOrden, $this->sentido)->paginate(10);

        $numOfertas = $ofertasEmpleo->count();
        $salarioPromedio = $ofertasEmpleo->avg('salario');

        return view('livewire.search', [
            "ofertas_empleo" => $ofertasEmpleo,
            "numOfertas" => $numOfertas,
            "salarioPromedio" => $salarioPromedio,
            "campoOrden" => $this->campoOrden,
            "sentido" => $this->sentido
        ]);
    }
}
