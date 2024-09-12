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
    
  
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user(); 
    
          
            if ($user->custom_token != 1) {
                Auth::logout(); 
                $this->reset(); 
                session()->flash('error', 'Your account is not approved by the Admin yet.');
                return;
            }
    
           
            return redirect()->route('user.dashboard');
        } else {
         
            session()->flash('error', 'Invalid email or password.');
        }
    }
    
}
