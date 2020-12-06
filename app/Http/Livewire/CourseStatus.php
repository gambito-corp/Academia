<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourseStatus extends Component
{
    use AuthorizesRequests;

    public $course, $current;

    public function mount(Course $course)
    {
        $this->course = $course;

        foreach ($course->Leciones as $leccion) {
            if (!$leccion->complete){
                $this->current = $leccion;
                break;
            }
            if (!$this->current){
                $this->current = $course->Leciones->last();
            }
        }
        $this->authorize('enrolled', $course);
    }

    public function render()
    {
        return view('livewire.course-status');
    }

    //Metodos

    public function changeLesson(Lesson $leccion)
    {
        $this->current = $leccion;
    }

    public function complete()
    {
        if ($this->current->complete){
            //Eliminar registro
            $this->current->Usuarios()->detach(auth()->id());
        }else{
            //Agregar Registro
            $this->current->Usuarios()->attach(auth()->id());
        }
        $this->current = Lesson::find($this->current->id);
        $this->course = Course::find($this->course->id);
    }
    //Propiedades Computadas

    public function getIndexProperty()
    {
        return $this->course->Leciones->pluck('id')->search($this->current->id);
    }

    public function getPreviousProperty()
    {
        if($this->index == 0){
            $return = null;
        }else{
            $return = $this->course->Leciones[$this->index - 1];
        }
        return $return;
    }

    public function getNextProperty()
    {
        if($this->index == $this->course->Leciones->count() - 1){
            $return = null;
        }else{
            //next
            $return = $this->course->Leciones[$this->index + 1];
        }
        return $return;
    }

    public function getAdvanceProperty()
    {
        $i = 0;
        foreach ($this->course->Leciones as $leccion){
            if ($leccion->complete){
                $i++;
            }
        }

        $advance = ($i * 100 )/($this->course->Leciones->count());
        return round($advance, 2);
    }
}
