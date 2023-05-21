<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function index()
    {
        return view('quiz', [
            'quizes' => Quiz::all()
        ]);
    }

    public function setting()
    {
        return view('quiz-setting', [
            'quizes' => Quiz::all()
        ]);
    }

    public function store(Request $request)
    {

        Quiz::updateOrCreate([
            'id'   => $request->id,
        ], [
            'title'     => $request->title,
            'link' => $request->link,
            'category'    => $request->category,
        ]);

        return redirect()->back()->with('status', 'Quiz Has Been inserted/updated');
    }

    public function edit(Quiz $quiz)
    {
        return view('quiz-edit', [
            'quizes' => Quiz::all(),
            'quiz' => $quiz
        ]);
    }

    public function update(Request $request)
    {
    }

    public function delete(Quiz $quiz)
    {
        $quiz->delete();

        return redirect('/quiz/setting');
    }
}
