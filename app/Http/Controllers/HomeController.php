<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;
use App\Models\Photo;
use App\Models\Role;
use App\Models\Social;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Review;
use App\Models\Contact;




class HomeController extends Controller
{
    public function index()
    {
        $name = Name::find(1);
        $photo = Photo::find(1);
        $roles = Role::where('status', 1)->latest()->get();
        $socials = Social::where('status', 1)->latest()->get();
        $about = About::find(1);
        $skills = Skill::where('status', 1)->get();
        $educations = Education::where('status', 1)->get();
        $experiences = Experience::where('status', 1)->get();
        $projects = Project::where('status', 1)->get();
        $certificates = Certificate::where('status', 1)->get();
        $reviews = Review::where('status', 1)->get();
        return view('welcome', compact('name', 'photo', 'roles', 'socials', 'about', 'skills', 'educations', 'experiences', 'projects', 'certificates', 'reviews'));
    }

    public function contactPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        $notification = array(
            'message' => 'Contact Us Submitted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
}