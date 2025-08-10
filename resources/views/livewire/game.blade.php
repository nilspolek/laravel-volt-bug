<?php

use function Livewire\Volt\{state, on};

on('colorChanged', function () {
    logger()->info("Some message");
});
?>

<div class="mx-auto grid grid-cols-5 grid-rows-5 gap-2 p-2 max-w-1/2">
    @for($i = 0; $i < 25; $i++)
        <livewire:field/>
    @endfor
</div>
