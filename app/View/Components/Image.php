<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Image extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image;
    public function __construct($dir)
    {
        if(DIRECTORY_SEPARATOR == "\\")
        {
            $this->image = str_replace("\\", "/", $dir);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image');
    }
}
