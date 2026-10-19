<?php

namespace App\View\Components\Home\Hero;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureIcon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $icon)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.hero.feature-icon');
    }
}
