<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function certificates()
    {
        $certificates = Certificate::where('status', 1)->get();
        foreach ($certificates as $data) {
            $data->image = asset($data->image);
        }
        return response([
            'message' => 'Certificate Data',
            'status' => 'success',
            'certificates' => $certificates,
            'code' => 200
        ], 200);
    }
}