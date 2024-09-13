<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.user.login')->layout('layouts.user-login');
    }

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:3', 'max:12'],
        ]);
    
        // Convert the email and password to lowercase before attempting authentication
        $email = strtolower($this->email);
        $password = strtolower($this->password);
    
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
    
            // Check if the custom_token field is approved
            if ($user->custom_token != 1) {
                Auth::logout();
                $this->reset();
                session()->flash('error', 'Your account is not approved by the Admin yet.');
                return;
            }
    
            // Redirect to the user dashboard
            return redirect()->route('user.dashboard');
        } else {
            // Show error message for invalid credentials
            session()->flash('error', 'Invalid email or password.');
        }
    }
    

    public function cancelEditReferenceNumber()
    {
        $this->reset(['email', 'password']);
    }
}
