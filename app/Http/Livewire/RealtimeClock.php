<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RealtimeClock extends Component
{
    public $currentTime;

    public function mount()
    {
        $this->currentTime = now()->toDateTimeString(); // Set waktu awal saat komponen dimuat
    }

    public function render()
    {
        return view('livewire.realtime-clock');
    }
}
