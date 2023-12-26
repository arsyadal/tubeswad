<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function goOnline(){
        return view('goOnline');
    }
    
    public function goModern(){
        return view('goModern');
    }
    public function goGlobal(){
        return view('goGlobal');
    }

    public function kuisionerSessionOne(Request $request){
        $kuisioner = Kuisioner::pluck('questionType')->unique()->values()->toArray();
        $kuisionerType = $kuisioner[0];
        $question = Kuisioner::where('questionType', $kuisionerType)->get();
        $answer = $request->session()->get('answer');

        return view('kuisioner.index', compact('question', 'answer', 'kuisioner'));
    }

    public function kuisionerSessionOneStore(Request $request){
        $validationRules = [
            'question-*' => 'required|numeric|between:1,5'
        ];

        $validator = Validator::make($request->all(), $validationRules);

        $answer = $request->session()->get('answer', []);
        $combinedAsnwer = array_merge($answer, $request->all());
        $request->session()->put('answer', $combinedAsnwer);

        return redirect()->route('user.kuisionerSessionTwo');
    }

    public function kuisionerSessionTwo(Request $request){
        $kuisioner = Kuisioner::pluck('questionType')->unique()->values()->toArray();
        $kuisionerType = $kuisioner[1];
        $question = Kuisioner::where('questionType', $kuisionerType)->get();
        $answer = $request->session()->get('answer');
        return view('kuisioner.question2', compact('question', 'answer', 'kuisioner'));
    }

    public function kuisionerSessionTwoStore(Request $request){
        $validationRules = [
            'question-*' => 'required|numeric|between:1,5'
        ];

        $answer = $request->session()->get('answer', []);
        $combinedAsnwer = array_merge($answer, $request->all());
        $request->session()->put('answer', $combinedAsnwer);

        return redirect()->route('user.kuisionerSessionThree');
    }

    public function kuisionerSessionThree(Request $request){
        $kuisioner = Kuisioner::pluck('questionType')->unique()->values()->toArray();
        $kuisionerType = $kuisioner[2];
        $question = Kuisioner::where('questionType', $kuisionerType)->get();
        $answer = $request->session()->get('answer');

        return view('kuisioner.question3', compact('question', 'answer', 'kuisioner'));
    }

    public function kuisionerSessionThreeStore(Request $request){
        $validationRules = [
            'question-*' => 'required|numeric|between:1,5'
        ];

        $validator = Validator::make($request->all(), $validationRules);

        $answer = $request->session()->get('answer', []);
        $combinedAsnwer = array_merge($answer, $request->all());
        $request->session()->put('answer', $combinedAsnwer);

        return redirect()->route('user.kuisionerSessionFour');
    }

    public function kuisionerSessionFour(Request $request){
        $kuisioner = Kuisioner::pluck('questionType')->unique()->values()->toArray();
        $kuisionerType = $kuisioner[3];
        $question = Kuisioner::where('questionType', $kuisionerType)->get();
        $answer = $request->session()->get('answer');

        return view('kuisioner.question4', compact('question', 'answer', 'kuisioner'));
    }

    public function kuisionerSessionFourStore(Request $request){
        $validationRules = [
            'question-*' => 'required|numeric|between:1,5'
        ];
        $answer = $request->session()->get('answer', []);
        $combinedAsnwer = array_merge($answer, $request->all());
        $sum = 0;
        foreach($combinedAsnwer as $key => $data){
            if(preg_match('/^question-\d+$/', $key)) {
                $sum += (int)$data;
            }
        }
        $totalQuestion = Kuisioner::count();
        $average = ($sum / $totalQuestion);
        $user = Auth::user();
        if($average <= 2){
            $user->update(['courseType' => 'GoOnline']);
        } elseif($average > 2 && $average < 4) {
            $user->update(['courseType' => 'GoGlobal']);
        } elseif ($average >= 4){
            $user->update(['courseType' => 'GoModern']);
        }
        $request->session()->forget('answer');
        return redirect()->route('dashboard')->with('success',"Your Course Type is $user->courseType");
    }
}
