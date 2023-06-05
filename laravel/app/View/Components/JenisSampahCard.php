<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JenisSampahCard extends Component
{
    public $title;
    public $image;
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $image, $route)
    {
        $this->title = $title;
        $this->image = $image;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.jenis-sampah-card');
    }
}
