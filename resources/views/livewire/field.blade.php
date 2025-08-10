<?php

use function Livewire\Volt\{state};

state(['color' => 'bg-gray-300', 'id' => -1]);
\Livewire\Volt\on('colorChanged', function () {
    logger()->info("Some message");
});

$handleClick = function(): void
{
    // $this ist hier verfügbar, weil Livewire Volt aus dem Kontext eine Komponente macht
    $this->color = match ($this->color) {
        'bg-gray-300' => 'bg-amber-200',
        'bg-amber-200' => 'bg-red-500',
        'bg-red-500' => 'bg-green-500',
        'bg-green-500' => 'bg-gray-300',
    };

    $this->dispatch('colorChanged', color: $this->color, id: $this->id);
}
?>

<div class="aspect-square select-none min-w-10 text-white rounded-lg flex items-center text-[1vw] justify-center {{ $color }}" wire:click="handleClick">
    <p class="text-5xl"> A </p>
</div>
