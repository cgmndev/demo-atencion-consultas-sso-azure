<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Consulta;
use App\Exports\ConsultasExport;
use Maatwebsite\Excel\Facades\Excel;

class ConsultasTableAdmin extends DataTableComponent
{
    protected $model = Consulta::class;

    public bool $columnSelect = true;


    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Fecha", "created_at")
                ->sortable(),
            Column::make("ALUMNO", "alumno.name")
                ->sortable(),
            Column::make("MOTIVO CONSULTA", "motivoconsulta.nombre")
                ->sortable(),
            Column::make("ESTADO", "estado")
                ->sortable(),

            Column::make("OPERADOR", "operador.name")
                ->sortable(),
            Column::make("ACCIONES", "id")
                ->format(
                    fn ($value, $row, Column $column) => view('admin.consultas.table-cell-operador')->withValue($row)
                )

        ];
    }

    public function bulkActions(): array
    {
        return [
            'export' => 'Exportar'
        ];
    }

    public function export()
    {
        $consultas = $this->getSelected();

        $this->clearSelected();

        return Excel::download(new ConsultasExport($consultas), 'consultas.xlsx');
    }

    public function builder(): Builder
    {
        if(in_array(auth()->user()->rol->codigo, ['ADMIN'])){
            return Consulta::orderby('operador_id', 'asc') ;
        }else if(in_array(auth()->user()->rol->codigo, ['OPER'])){
            return Consulta::where('operador_id', auth()->user()->id)->orderby('operador_id', 'asc') ;
        }

    }


}
