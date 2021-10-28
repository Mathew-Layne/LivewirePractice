<?php

namespace App\Http\Livewire;

use App\Models\PhoneNunber;
use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public $students;    

    public function mount(){
        $this->students = PhoneNunber::all();
    }
    
    public function render()
    {
        
        return view('livewire.index');
    }
}
