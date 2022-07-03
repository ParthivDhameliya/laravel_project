<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component {
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $image;
    public $description;
    public function __construct($title, $image, $description) {
        $this -> title = $title; 
        $this -> image = $image; 
        $this -> description = $description; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.card');
    }

    public function add($a) {
        $b = 20;
        return $a + $b;
    }
}
