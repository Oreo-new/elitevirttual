<?php

namespace App\Http\Controllers;

use App\Mail\MailNotification;
use App\Models\Announcement;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\PageArticle;
use App\Models\Service;
use App\Models\Team;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home() 
    {
        
        $menu = Menu::All();
        $sectionBlog = $menu->where('name', 'Blog')->where('status', 1)->first();
        $blogs = Blog::All()->sortByDesc('created_at');
        $services = Service::All()->sortBy('order');
        $teams = Team::All()->sortBy('order');
        $sectionTeam = $menu->where('name', 'Team')->where('status', 1)->first();
        $sectionAnnouncement = $menu->where('name', 'Announcement')->where('status', 1)->first();
        $announcement = Announcement::latest()->first();
        $works = Work::All();

        return view('master')
        ->with('blogs', $blogs)
        ->with('sectionBlog', $sectionBlog)
        ->with('services', $services)
        ->with('sectionTeam', $sectionTeam)
        ->with('teams', $teams)
        ->with('works', $works)
        ->with('sectionAnnouncement', $sectionAnnouncement)
        ->with('announcement', $announcement);
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new Captcha]
        ]);

        $input = $request->all();
        Mail::to('clintscopy@gmail.com')->send(new MailNotification($input));

        return redirect()->back()->with(['success' => 'Thank you for contacting us']);
    }
}
