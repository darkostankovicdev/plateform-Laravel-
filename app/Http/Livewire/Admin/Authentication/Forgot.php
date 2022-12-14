<?php

namespace App\Http\Livewire\Admin\Authentication;

// Illuminate
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Livewire\Component;

// Models
use App\Models\User;

// Traits
use App\Traits\Livewire\Modal;

// Notifications
use App\Notifications\Users\Authentication\PasswordResetNotification;

class Forgot extends Component
{
    public $email;
    public $complete = false;

    public $rules = [
        "email" => "required|email",
    ];

    public function render()
    {
        return view("pages.admin.authentication.forgot")->layout("components.container");
    }

    public function save()
    {
        $this->validate();

        if ($user = User::where(["email" => $this->email])->first()) {
            $expires = now()
                ->add(24, "hours")
                ->toISOString();
            $payload = [
                "token" => Hash::make(md5($expires . optional($user)->id . optional($user)->email . optional($user)->password)),
                "expires" => $expires,
                "identity" => optional($user)->id,
            ];

            $user->notify(new PasswordResetNotification(base64_encode(json_encode($payload))));
        }
        $this->complete = true;
    }
}
