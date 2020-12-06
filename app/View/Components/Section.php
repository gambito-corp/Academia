<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Section extends Component
{
    public $title;
    public $color;

    public function __construct($title, $color = null)
    {
        $this->title = $title;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.section');
    }
}
