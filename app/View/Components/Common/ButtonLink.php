<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $href;
    public $target;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $href, string $target = "_self")
    {
        $this->href = $href;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.button-link');
    }
}