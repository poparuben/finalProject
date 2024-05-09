<?php

namespace App\View\Components;

use Illuminate\View\Component;

class head extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cssPath;
    public function __construct($data=null)
    {
        $this->cssPath=$data;
    }
    


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.head');
    }
}
