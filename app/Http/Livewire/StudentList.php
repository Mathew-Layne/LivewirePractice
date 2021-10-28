<?php

namespace App\Http\Livewire;

use App\Models\PhoneNunber;
use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{
    public $name;
    public $dob;    
    public $students;
    public $studentId;
    public $editStudent = false;
    public $addAStudent = false;

    public function addstudent(){
        $count = Student::get()->count();
        // dd($count);
        Student::create([
            'name' => $this->name,
            'dob' => $this->dob,
        ]);        

        $this->addAStudent = false;
    }

    public function editStudent($id){
        
        $this->editStudent = true;       
        $studentData = Student::find($id);
        $this->name = $studentData->name;
        $this->dob = date('Y-m-d', strtotime($studentData->dob));        
        $this->studentId = $id;
        $this->addAStudent = false;
    }

    public function studentEdited(){

        $studentData = Student::find($this->studentId);
        $studentData->name = $this->name;
        $studentData->dob = $this->dob;
        $studentData->save();

        $this->editStudnet = false;
    }

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.student-list',['students' => $this->students]);
    }
}
