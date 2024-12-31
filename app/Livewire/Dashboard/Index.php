<?php

namespace App\Livewire\Dashboard;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    use LivewireAlert;

    #[Title('Dashboard')]

    public function render()
    {
        return view('livewire.dashboard.index');
    }

    public function alertya()
    {
        $this->confirm('Are you sure do want to leave?', [
            'onConfirmed' => 'confirmed',
        ]);
    }
}
