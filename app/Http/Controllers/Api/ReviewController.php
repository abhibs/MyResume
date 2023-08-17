<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function reviews()
    {
        $reviews = Review::where('status', 1)->get();
        foreach ($reviews as $data) {
            $data->image = asset($data->image);
        }

        return response([
            'message' => 'Reviews Data',
            'status' => 'success',
            'reviews' => $reviews,
            'code' => 200
        ], 200);
    }
}