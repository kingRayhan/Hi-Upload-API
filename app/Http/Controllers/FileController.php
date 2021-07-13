<?php

namespace App\Http\Controllers;

use App\Http\Resources\FileResource;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * FileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return FileResource::collection(auth()->user()->files);
    }
}
