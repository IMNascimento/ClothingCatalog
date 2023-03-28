<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     */
    public $part;
    public $validate;
    public $types;
    public function __construct($part, $types, $validate)
    {
        $this->part = $part;
        $this->types = $types;
        $this->validate = $validate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.show');
    }
}
