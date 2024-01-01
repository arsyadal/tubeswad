<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Kuisioner;
use Illuminate\Http\Request;
use App\Models\CourseCategory;

class AdminController extends Controller
{
    public function index(){
        $allUser = User::role('user')->where('courseType', '!=', null)->count();
        $pending = User::role('user')->where('courseType', null)->count();
        $courseCategory = CourseCategory::all();
        return view('admin.index', compact('allUser', 'pending', 'courseCategory'));
    }

    public function kuisioner(){
        $kuisioner = Kuisioner::pluck('questionType')->unique()->values()->toArray();
        $kuisionerData = [];
        foreach($kuisioner as $key => $data){
            $kuisionerData['kuisioner' . ($key + 1)] = Kuisioner::where('questionType', $data)->get();
        }
        return view('admin.kuisioner', compact('kuisionerData'));
    }

    public function editKuisioner(Request $request, string $id){
        $question = Kuisioner::find($id);
        $question->update(['question' => $request->question]);
        
        return redirect()->back()->with('success', 'Pertanyaan berhasil diupdate');
    }

    public function deleteKuisioner(string $id){
        $question = Kuisioner::find($id);

        $question->delete();

        return redirect()->back()->with('success', 'Pertanyaan berhasil dihapus');
    }

    public function addKuisioner(Request $request, string $type){
        $request->validate(['question' => 'required|string']);

        Kuisioner::create([
            'question' => $request->question,
            'questionType' => $type
        ]);

        return redirect()->back()->with('success', 'Pertanyaan berhasil ditambahkan');
    }
    
    public function editKuisionerType(Request $request, string $type){
        $questionType = Kuisioner::where('questionType', $type)->get();
        foreach($questionType as $data){
            $data->update(['questionType' => $request->questionType]);;
        }
        return redirect()->back()->with('success', 'Tipe Pertanyaan berhasil diupdate');
    }

    public function course(string $idCourse){
        $course = Course::where('category_id', $idCourse)->get();
        $courseCategory = CourseCategory::find($idCourse);
        return view('admin.course.index', compact('course', 'courseCategory'));
    }
}
