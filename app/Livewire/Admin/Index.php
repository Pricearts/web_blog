<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{

    /**
     * Toggle modal dialog
     *
     * @var bool
     */
    public bool $showModal = false;

    public function toggleModal(): void
    {
        $this->showModal = ($this->showModal) ? false : true;
    }

    public function render()
    {
        return view('livewire.admin.index');
    }
}
