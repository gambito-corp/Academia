<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class CourseIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $course = Course::where('title', 'LIKE', '%' . $this->search . '%')->where('user_id', auth()->id())->paginate(10);
        return view('livewire.instructor.course-index', compact('course'));
    }

    public function limpiarPage()
    {
        $this->reset('page');
    }
}

