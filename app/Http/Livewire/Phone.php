<?php

namespace App\Http\Livewire;

use App\Models\PhoneNunber;
use App\Models\Student;
use Livewire\Component;

class Phone extends Component
{
    public $students;
    public $select;
    public $phoneno;

    public function mount()
    {

        $this->students = Student::all();
    }

    public function render()
    {

        $this->phoneno = PhoneNunber::where('student_id', $this->select)->first();

        return view('livewire.phone');
    }
    
}
