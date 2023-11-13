<?php

namespace App\Livewire;

use Livewire\Component;

class CountComponent extends Component
{
    public $count = 0;

    public function sumar(){
        sleep(1);
        $this->count++;
    }

    public function restar(){
        sleep(1);
        $this->count--;
    }

    public function render()
    {
        return view('livewire.count-component');
    }
}
