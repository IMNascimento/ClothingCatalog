<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public $validate;
    public $item;
    public $msg;
    public function __construct($validate, $item, $msg)
    {
        $this->validate = $validate;
        $this->item = $item;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.main');
    }
}
