<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;

class ResumeController extends Controller
{
    public function resume()
    {

        $educations = Education::where('status', 1)->get();
        $experiences = Experience::where('status', 1)->get();

        return response([
            'message' => 'Resume Data',
            'status' => 'success',
            'educations' => $educations,
            'experiences' => $experiences,
            'code' => 200
        ], 200);


    }
}