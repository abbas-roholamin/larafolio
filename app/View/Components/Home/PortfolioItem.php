<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class PortfolioItem extends Component
{
    public $categories  = [];
    public $title;
    public $image;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $image, string $link , array $categories)
    {
        $this->categories = $categories;
        $this->title = $title;
        $this->image = $image;
        $this->link = $link;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio-item');
    }
}