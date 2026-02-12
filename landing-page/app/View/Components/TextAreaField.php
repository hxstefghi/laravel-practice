<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextAreaField extends Component
{
    /**
     * Create a new component instance.
     */
    public $name, $label, $value;
    public function __construct($name, $label, $value = "")
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textarea-field');
    }
}
