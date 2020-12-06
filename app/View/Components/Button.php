<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $color;
    public $href;
    private $alto;
    private $block;

    public function __construct($color='primary', $href='#', $alto=null ,$block=null)
    {
        $this->color = $color;
        $this->href = $href;
        $this->alto = $alto;
        $this->block = $block;
    }

    public function render()
    {
        return view('components.button');
    }
}
