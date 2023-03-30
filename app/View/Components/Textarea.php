<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $id;

    /**
     * The alert type.
     *
     * @var string
     */
    public $name;

    /**
     * The alert type.
     *
     * @var string
     */
    public $col;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $col='full')
    {
        $this->id = $id;
        $this->name = $name;
        $this->col = 'col-span-'.$col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
