<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Image;
use Illuminate\Support\Carbon;

class PhotoController extends Controller
{
    public function create()
    {
        return view('admin.photo.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => 'required',
        ], [
            'image.required' => 'Profile Image is Required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

        Image::make($image)->resize(1920, 1053)->save('storage/profile/' . $name_gen);
        $save_url = 'storage/profile/' . $name_gen;

        Photo::insert([
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Profile Photo Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('photo')->with($notification);
    }

    public function index()
    {
        $data = Photo::find(1);
        return view('admin.photo.index', compact('data'));
    }

    public function update(Request $request)
    {

        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)->resize(1920, 1053)->save('storage/profile/' . $name_gen);
            $save_url = 'storage/profile/' . $name_gen;

            Photo::findOrFail($id)->update([
                'image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Profile Photo Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('photo')->with($notification);

        }

    }


}