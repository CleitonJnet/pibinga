<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContentPage extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route = 'system.dashboard')
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content-page');
    }
}
