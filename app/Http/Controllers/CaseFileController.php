<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseFile;
use Illuminate\Http\JsonResponse;

class CaseFileController extends Controller
{
    /**
     * Get all case files (API endpoint for Vue component)
     */
    public function index(): JsonResponse
    {
        $caseFiles = CaseFile::with('Media')->get();
        return response()->json(['data' => $caseFiles]);
    }

    /**
     * Display the case file page (Blade view)
     */
    public function show()
    {
        return view('case_file');
    }
}
