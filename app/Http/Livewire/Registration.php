<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public function render()
    {
        // В монокомпоненте по-умолчанию Лайввар ожидает layout.app
        return view('livewire.registration')
            ->extends('layouts.auth');
    }
}
