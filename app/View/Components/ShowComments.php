<?php

namespace App\View\Components;

use App\Models\Comments;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowComments extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-comments', [
            'comments' => Comments::all()
        ]);
    }
}
