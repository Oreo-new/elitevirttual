<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\PageArticle;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() 
    {
        $articles = PageArticle::All();
        $about = $articles->where('slug', 'about-us')->first();
        $mission = $articles->where('slug', 'mission-statement')->first();
        $vission = $articles->where('slug', 'vision-statement')->first();
        $menu = Menu::All();
        $sectionBlog = $menu->where('name', 'Blog')->where('status', 1)->first();
        $blogs = Blog::All()->sortByDesc('created_at');
        $services = Service::All()->sortBy('order');
        $teams = Team::All()->sortBy('order');
        $sectionTeam = $menu->where('name', 'Team')->where('status', 1)->first();
        $sectionAnnouncement = $menu->where('name', 'Announcement')->where('status', 1)->first();
        $announcement = Announcement::latest()->first();
        


        return view('master')->with('about', $about)
        ->with('mission', $mission)
        ->with('vision', $vission)
        ->with('blogs', $blogs)
        ->with('sectionBlog', $sectionBlog)
        ->with('services', $services)
        ->with('sectionTeam', $sectionTeam)
        ->with('teams', $teams)
        ->with('sectionAnnouncement', $sectionAnnouncement)
        ->with('announcement', $announcement);
    }
}
