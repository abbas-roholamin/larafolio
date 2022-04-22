<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\Unique;
use Illuminate\View\Component;

class Portfolio extends Component
{

    public $items = [];
    public $tabs = [];


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                "categories" => ['Laravel','Tailwind'],
                "title" => "Exchange system",
                "image" => url('images/portfolio/image-01.jpg'),
                "link" => "https://tailwindcss.com/docs/border-width"
            ],
            [
                "categories" => ['Php','Bootstrap'],
                "title" => "Php + Bootstrap CMS",
                "image" => url('images/portfolio/image-02.jpg'),
                "link" => "https://tailwindcss.com/docs/border-width"
            ],
            [
                "categories" => ['React','Bootstrap'],
                "title" => "React dashboard(SPA)",
                "image" => url('images/portfolio/image-03.jpg'),
                "link" => "https://tailwindcss.com/docs/border-width"
            ],
            [
                "categories" => ['Laravel','Bootstrap'],
                "title" => "Finance system",
                "image" => url('images/portfolio/image-04.jpg'),
                "link" => "https://tailwindcss.com/docs/border-width"
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items,"categories")));

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}