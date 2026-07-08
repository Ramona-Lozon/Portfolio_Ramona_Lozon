<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Http\JsonResponse;

class MediaController extends Controller
{
    /**
     * Get all Media (API endpoint for Vue component)
     */
    public function index(): JsonResponse
    {
        $media = Media::all();
        return response()->json(['data' => $media]);
    }

    /**
     * Display the case file page (Blade view)
     */
    public function show()
    {
        return view('media');
    }
}
