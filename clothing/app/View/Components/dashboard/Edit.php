<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Edit extends Component
{
    public $part;
    public $validate;
    public $types;
    public $list;
    public function __construct($part, $types, $validate, $list)
    {
        $this->part = $part;
        $this->types = $types;
        $this->validate = $validate;
        $this->list = $list;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.edit');
    }
}
