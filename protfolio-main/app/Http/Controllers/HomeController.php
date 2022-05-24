<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Description;
use App\Models\Education;
use App\Models\Experience;
use App\Models\MySite;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class HomeController extends Controller
{
    public function home(){
        $user = User::first();
        $description = Description::first();
        $about = About::first();
        return view('front.index', compact('user', 'description', 'about'));
    }
   public function about(){
       $about = About::first();
       $user = User::first();
       $experiences = Experience::all();
       return view('front.home.about', compact('about','user', 'experiences'));
   }
    public function education()
    {
        $user = User::first();
        $about = About::first();
        $educations = Education::all();
        return view('front.home.education', compact('educations', 'user', 'about'));
    }
    public function mySites(){
        $user = User::first();
        $about = About::first();
        $my_sites = MySite::all();
        return view('front.home.my-sites', compact('user', 'about', 'my_sites'));
    }
    public function contact()
    {
        $contact = Contact::first();
        $user = User::first();
        $about = About::first();
        return view('front.home.contact', compact('contact', 'user', 'about'));
    }
}
