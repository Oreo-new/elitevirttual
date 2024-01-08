<?php

namespace App\View\Components;

use App\Models\PageArticle;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
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
        $articles = PageArticle::All();
        $about = $articles->where('slug', 'about-us')->first();
        $mission = $articles->where('slug', 'mission-statement')->first();
        $vission = $articles->where('slug', 'vision-statement')->first();
        $image = $articles->where('slug', 'about-us-image')->first();

        return view('components.about')->with('about', $about)
        ->with('mission', $mission)
        ->with('vision', $vission)
        ->with('image', $image);
    }
}
