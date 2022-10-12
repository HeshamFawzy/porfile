<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Post;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::where(['visibility' => true])->get()->KeyBy('key');
        $experience = Experience::where(['visibility' => true])->orderBy('arrangement')->get();
        $education = Education::where(['visibility' => true])->orderBy('arrangement')->get();
        $services = Service::where(['visibility' => true])->orderBy('arrangement')->get();
        $servicesGroup = getChunk($services, 2);
        $skills = Skill::where(['visibility' => true])->orderBy('arrangement')->get();
        $skillsGroup = getChunk($skills, 2);
        $works = Work::where(['visibility' => true])->orderBy('arrangement')->get();
        $posts = Post::where(['visibility' => true])->orderBy('arrangement')->get();
        $setting = Setting::where(['visibility' => true])->get()->KeyBy('key');
        return view('index', compact('about', 'experience', 'education', 'services', 'servicesGroup', 'skills', 'skillsGroup', 'works', 'posts', 'setting'));
    }

    public function contact(StoreContactRequest $request)
    {
        $contact = Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
        ]);

        return redirect()->back();
    }
}
