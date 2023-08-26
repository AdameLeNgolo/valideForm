<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required|email')]
    public $email_ = '';

    #[Rule('required|min:5')]
    public $password_ = '';

    public function save()
    {
        $this->validate();

        // $this->reset();
        dd('Mail validation');
    }


    public function update($field)
    {
        $this->validateOnly([
            $field,[
                'email_' => 'required|email',
                'password_' => 'required|password|min:5',
            ]
        ]);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
