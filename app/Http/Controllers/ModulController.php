<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModul;
use Illuminate\Http\Request;
use App\Models\ModulQuestion;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\Storage;

class ModulController extends Controller
{
    public function create(string $id){
        $course = Course::find($id);
        $courseCategory = CourseCategory::find($course->category_id);
        return view('admin.modul.create', compact('course', 'courseCategory'));
    }

    public function store(Request $request){
        $request->validate([
            'namaModul' => 'required|string|max:255',
            'forum' => 'required|string|max:255'
        ]);

        CourseModul::create([
            'course_id' => $request->course_id,
            'course_category_id' => $request->course_category_id,
            'modul_name' => $request->namaModul,
            'forum' => $request->forum,
        ]);

        return redirect()->back()->with('success', "Modul berhasil dibuat");
    }

    public function update(Request $request, string $id){
        $request->validate(['modul_name' => 'required|string|max:255']);

        $modul = CourseModul::find($id);

        $modul->update(['modul_name' => $request->modul_name]);

        return redirect()->back()->with('success', "Modul berhasil diupdate");
    }
    
    public function destroy(string $id){
        $modul = CourseModul::find($id);
        
        $modul->delete();

        return redirect()->back()->with('success', "Modul berhasil dihapus");
    }

    public function questionCreate(string $id){
        $modul = CourseModul::find($id);
        $course = Course::find($modul->course_id);
        $courseCategory = CourseCategory::find($course->category_id);

        return view('admin.modul.createQuestion', compact('modul', 'course', 'courseCategory'));
    }

    public function questionStore(Request $request){
        $request->validate([
            'modulType' => 'required|string',
            'deskripsi' => 'required|string',
            'materi' => 'required|mimes:jpg,jpeg,png,gif,icon,pdf,mp4,heic',
        ]);

        $filenameExt = $request->file('materi')->getClientOriginalName();
        $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
        $extension = $request->file('materi')->getClientOriginalExtension();
        $filenameSave = $filename.'_'.time().'.'.$extension;
        $request->file('materi')->storeAs('public/modulMateri', $filenameSave);

        ModulQuestion::create([
            'modul_id' => $request->modul_id,
            'modulType' => $request->modulType,
            'deskripsi' => $request->deskripsi,
            'materi' => $filenameSave
        ]);

        return redirect()->back()->with('success', 'Modul Question Berhasil Dibuat!!!');
    }

    public function questionEdit(string $id){
        $activities = ModulQuestion::find($id);
        $modul = CourseModul::find($activities->modul_id);
        $course = Course::find($modul->course_id);
        $courseCategory = CourseCategory::find($course->category_id);

        return view('admin.modul.editQuestion', compact('activities', 'modul', 'course', 'courseCategory'));
    }

    public function questionUpdate(Request $request, string $id){
        $request->validate([
            'modulType' => 'required|string',
            'deskripsi' => 'required|string',
            'materi' => 'required|mimes:jpg,jpeg,png,gif,icon,pdf,mp4,heic',
        ]);

        $activities = ModulQuestion::find($id);
        if($request->hasFile('materi')){
            if(Storage::disk('public')->exists('modulMateri/'. $activities->materi)){
                Storage::disk('public')->delete('modulMateri/'. $activities->materi);
            }

            $filenameExt = $request->file('materi')->getClientOriginalName();
            $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
            $extension = $request->file('materi')->getClientOriginalExtension();
            $filenameSave = $filename.'_'.time().'.'.$extension;
            $request->file('materi')->storeAs('public/modulMateri', $filenameSave);

            $activities->update(['materi' => $filenameSave]);
        }

        $activities->update([
            'modulType' => $request->modulType,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back()->with('success', 'Modul Activities Berhasil Diupdate!!!');
    }
    
    public function questionDestroy(string $id){
        $activities = ModulQuestion::find($id);

        $activities->delete();
        
        return redirect()->back()->with('success', 'Modul Activities Berhasil dihapus!!!');
    }
}
