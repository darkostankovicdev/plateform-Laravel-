<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Http\Livewire\Component;

// Models
use App\Models\Appointment;

// Traits
use App\Traits\Livewire\Modal;

class Reinstate extends Component
{
    use Modal;

    public Appointment $appointment;

    public $rules = [];

    public function render()
    {
        return view("segments.admin.appointments.reinstate");
    }

    public function save()
    {
        $this->appointment->cancelled_at = null;
        $this->appointment->save();
        $this->close();
    }
}
