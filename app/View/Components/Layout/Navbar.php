<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $navigatinItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigatinItems = [
            ["label"=> "About","href"=> "#about"],
            ["label"=> "Projects","href"=> "#projects"],
            // ["label"=> "Tutorial Video","href"=> "#tutorial"],
            ["label"=> "Contact","href"=> "#contact"]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.navbar');
    }
}