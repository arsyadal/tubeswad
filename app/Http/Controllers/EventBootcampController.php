<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Bootcamp;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class EventBootcampController extends Controller
{
    public function index(){
        $category = CourseCategory::all();

        return view('admin.eventbootcamp.index', compact('category'));
    }

    public function detail(string $category){
        $event = Event::where('category_id', $category)->get();
        $bootcamp = Bootcamp::where('category_id', $category)->get();

        return view('admin.eventbootcamp.detail', compact('event', 'bootcamp'));
    }
}
