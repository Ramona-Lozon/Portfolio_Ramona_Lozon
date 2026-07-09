<?php

namespace App\Http\Controllers;

use App\Models\CaseFile;
use Illuminate\Http\JsonResponse;

class CaseFileController extends Controller
{
    /**
     * Get all case files (API endpoint for Vue component)
     */
    public function index(): JsonResponse
    {
        $caseFiles = CaseFile::with('media')->get();
        return response()->json(['data' => $caseFiles]);
    }

    /**
     * Get a single case file by ID
     */
    public function detail($id): JsonResponse
    {
        $caseFile = CaseFile::with('media')->findOrFail($id);
        return response()->json(['data' => $caseFile]);
    }

    /**
     * Display the case file page (Blade view)
     */
    public function list()
    {
        return view('home');
    }

    /**
     * Display the case file detail page (Blade view)
     */
    public function show($id)
    {
        return view('case_file', ['id' => $id]);
    }
}
