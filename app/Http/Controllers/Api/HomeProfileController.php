<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Name;
use App\Models\Photo;
use App\Models\Role;
use App\Models\Social;




class HomeProfileController extends Controller
{
    public function profile()
    {
        $name = Name::find(1);
        $photo = Photo::find(1);
        $photo->image = asset($photo->image);
        $roles = Role::where('status', 1)->latest()->get();
        $socials = Social::where('status', 1)->latest()->get();
        return response([
            'message' => 'Home Profile Data',
            'status' => 'success',
            'name' => $name,
            'photo' => $photo,
            'roles' => $roles,
            'socials' => $socials,
            'code' => 200
        ], 200);
    }
}
