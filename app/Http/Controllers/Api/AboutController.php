<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::find(1);
        $about->image = asset($about->image);
        $skills = Skill::where('status', 1)->get();
        return response([
            'message' => 'About Section Data',
            'status' => 'success',
            'about' => $about,
            'skills' => $skills,
            'code' => 200
        ], 200);


    }
}