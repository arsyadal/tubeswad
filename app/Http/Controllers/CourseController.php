<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModul;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(){
        $courseCategory = CourseCategory::all();
        return view('admin.course.index', compact('courseCategory'));
    }
    public function detail(string $idCourseCategory){
        $course = Course::where('category_id', $idCourseCategory)->get();
        $courseCategory = CourseCategory::find($idCourseCategory);
        return view('admin.course.detail', compact('course', 'courseCategory'));
    }
    public function create(string $idCourseCategory){
        $courseCategory = CourseCategory::find($idCourseCategory);
        return view('admin.course.create', compact('courseCategory'));
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'courseName' => 'required|string|max:255',
            'namaPemateri' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'file' => 'required|mimes:jpg,jpeg,png,gif,svg,ico',
            'sertifikat' => 'required|mimes:jpg,jpeg,png,gif,svg,ico',
        ]);

        $filenameExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSave = $filename.'_'.time().'.'.$extension;
        $request->file('file')->storeAs('public/coursephoto', $filenameSave);

        $sertifikatExt = $request->file('sertifikat')->getClientOriginalName();
        $sertifikat = pathinfo($sertifikatExt, PATHINFO_FILENAME);
        $sertifikatExtension = $request->file('sertifikat')->getClientOriginalExtension();
        $sertifikatSave = $sertifikat.'_'.time().'.'.$sertifikatExtension;
        $request->file('sertifikat')->storeAs('public/sertifikatcourse', $sertifikatSave);

        Course::create([
            'category_id' => $request->category_id,
            'courseName' => $request->courseName,
            'namaPemateri' => $request->namaPemateri,
            'deskripsi' => $request->deskripsi,
            'file' => $filenameSave,
            'sertifikat' => $sertifikatSave
        ]);

        return redirect()->back()->with("success", "Course $request->courseName berhasil dibuat");
    }

    public function edit(string $id){
        $course = Course::find($id);
        $courseCategory = CourseCategory::find($course->category_id);    
        return view('admin.course.edit', compact('course', 'courseCategory'));
    }

    public function update(Request $request, string $id){
        $request->validate([
            'category_id' => 'required',
            'courseName' => 'required|string|max:255',
            'namaPemateri' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'file' => 'mimes:jpg,jpeg,png,gif,svg,ico',
            'sertifikat' => 'mimes:jpg,jpeg,png,gif,svg,ico',
        ]);
        $course = Course::find($id);

        if($request->hasFile('file')){
            if(Storage::disk('public')->exists('coursephoto/'. $course->file)){
                Storage::disk('public')->delete('coursephoto/'. $course->file);
            }
            $filenameExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filenameSave = $filename.'_'.time().'.'.$extension;
            $request->file('file')->storeAs('public/coursephoto', $filenameSave);

            $course->update([
                'file' => $filenameSave,
            ]);
        }

        if($request->hasFile('sertifikat')){
            if(Storage::disk('public')->exists('sertifikatcourse/'. $course->sertifikat)){
                Storage::disk('public')->delete('sertifikatcourse/'. $course->sertifikat);
            }
            $sertifikatExt = $request->file('sertifikat')->getClientOriginalName();
            $sertifikat = pathinfo($sertifikatExt, PATHINFO_FILENAME);
            $sertifikatExtension = $request->file('sertifikat')->getClientOriginalExtension();
            $sertifikatSave = $sertifikat.'_'.time().'.'.$sertifikatExtension;
            $request->file('sertifikat')->storeAs('public/sertifikatcourse', $sertifikatSave);
            $course->update([
                'sertifikat' => $sertifikatSave
            ]);
        }

        $course->update([
            'courseName' => $request->courseName,
            'namaPemateri' => $request->namaPemateri,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back()->with('success', 'Course berhasil diupdate');
    }

    public function destroy(string $id){
        $course = Course::find($id)->delete();

        return redirect()->route('admin.course')->with('success', 'Course Berhasil Di hapus');
    }

    public function detailCourse(string $courseId){
        $course = Course::find($courseId);
        $modul = CourseModul::where('course_id', $course->id)->get();
        $courseCategory = CourseCategory::find($course->category_id);
        return view('admin.course.detailCourse', compact('course', 'modul', 'courseCategory'));
    }
}
