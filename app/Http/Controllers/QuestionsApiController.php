<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsApiController extends Controller
{
    public function index()
    {
        return Questions::all();
    }

    public function findById($id)
    {
        return Questions::find($id);
    }

    public function store()
    {
        request()->validate([
            'question' => 'required',
            'question_types' => 'required',
            'order' => 'required',
            'points' => 'required',
            'answers' => 'required',
        ]);

        return Questions::create([
            'question' => request('question'),
            'question_types' => request('question_types'),
            'child_questions' => 0,
            'order' => request('order'),
            'points' => request('points'),
            'answers' => request('answers'),
            'choices' => ''
        ]);
    }

    public function update(Questions $post)
    {
        request()->validate([
            'question' => 'required',
            'question_types' => 'required',
            'order' => 'required',
            'points' => 'required',
            'answers' => 'required'
        ]);

        $success = $post->update([
            'question' => request('question'),
            'question_types' => request('question_types'),
            'child_questions' => 0,
            'order' => request('order'),
            'points' => request('points'),
            'answers' => request('answers'),
            'choices' => ''
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Questions $post)
    {
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}
