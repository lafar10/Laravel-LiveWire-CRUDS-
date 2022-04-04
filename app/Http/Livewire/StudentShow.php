<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class StudentShow extends Component
{

    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap';

    public $name, $email, $course, $student_id;

    protected function rules()
    {
        return [
            'name' => 'required|min:6|string',
            'email' => ['required', 'email'],
            'course' => 'required|min:6|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validatedData = $this->validate();

        Student::create($validatedData);

        session()->flash('message','created with success');

        $this->resetInput();

        $this->dispatchBrowserEvent('name-updated');
    }

    public function editStudent(int $student_id)
    {
        $student = Student::find($student_id);

        if($student)
        {
            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->course = $student->course;
        }
        else
        {
            return redirect()->to('/index');
        }

    }

    public function updateStudent()
    {
        $validatedData = $this->validate();

        Student::where('id',$this->student_id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'course' => $this->course,
        ]);

        session()->flash('message','Updated with success');

        $this->resetInput();

        $this->dispatchBrowserEvent('name-updated');
    }

    public function deleteStudent(int $student_id)
    {
        $this->student_id = $student_id;
    }

    public function destroyStudent()
    {
        Student::find($this->student_id)->delete();

        session()->flash('message','Delete with success');

        $this->dispatchBrowserEvent('name-updated');
    }

    public function close_modal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->course = '';
    }

    public function render()
    {
        $students = Student::where('name', 'like', '%'.$this->search.'%')
                            ->orWhere('email', 'like', '%'.$this->search.'%')
                            ->orderBy('name','desc')->paginate(3);
        return view('livewire.student-show',['students' => $students]);
    }
}
