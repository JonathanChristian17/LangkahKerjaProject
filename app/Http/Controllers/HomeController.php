<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->take(10)->get();
        return view('dashboard', compact('courses'));
    }

    // courses by category
    public function courses_by_category(Category $category)
    {
        return view('courses_by_category')
            ->with('category', $category)
            ->with('courses', $category->courses()->paginate(6));
    }

    // course details
    public function course_detail(Course $course)
    {
        return view('course_details', compact('course'));
    }

    public function checkAuth()
    {
        $isLoggedIn = auth()->check() ? true : false;
        return response()->json(['success' => $isLoggedIn]);
    }
}
