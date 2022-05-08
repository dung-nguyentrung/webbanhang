<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $field;
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $field, $categories)
    {
        $this->name = $name;
        $this->field = $field;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
