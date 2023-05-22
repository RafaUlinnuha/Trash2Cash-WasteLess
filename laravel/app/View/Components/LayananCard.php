<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LayananCard extends Component
{
    public $title;
    public $image;
    public $desc;
    public $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image, $desc, $route)
    {
        $this->title = $title;
        $this->image = $image;
        $this->desc = $desc;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layanan-card');
    }
}
