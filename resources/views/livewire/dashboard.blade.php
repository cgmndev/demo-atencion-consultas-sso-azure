<?php

use function Livewire\Volt\{computed, state};
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

state(indicador1: 7, indicador2: 8, indicador3: 3);

$incrementIndicador1 = fn () => $this->indicador1++;
$incrementIndicador2 = fn () => $this->indicador2++;
$incrementIndicador3 = fn () => $this->indicador3++;

$expenses = computed(fn () => (new ColumnChartModel())
    ->setTitle('Expenses by Type')
    ->addColumn('Indicador1', $this->indicador1, '#f6ad55')
    ->addColumn('Indicador2', $this->indicador2, '#fc8181')
    ->addColumn('Indicador3', $this->indicador3, '#90cdf4'));

?>

<div class="p-5 bg-white mt-10">
    <button wire:click="incrementIndicador1" class="font-semibold p-2 ">+ Indicador1</button>
    <button wire:click="incrementIndicador2" class="font-semibold p-2 ">+ Indicador2</button>
    <button wire:click="incrementIndicador3" class="font-semibold p-2 ">+ Indicador3</button>

    <livewire:livewire-column-chart
    class="w-full h-full max-w-lg"
        key="{{ $this->expenses->reactiveKey() }}"
        :column-chart-model="$this->expenses"
    />

</div>