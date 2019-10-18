<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loadHome()
    {
        $stories = \App\Story::all();

        return view('home', ['stories' => $stories]);
    }

    public function saveStory(Request $request)
    {
        $answers = new \App\Story;

        $answers->role = request('role-input');
        $answers->activity = request('activity-input');
        $answers->context = request('context-input');
        $answers->reason = request('reason-input');
        $answers->nickname = 'Anonym';

        $answers->save();

        return redirect('/#stories');
    }

    public function loadStory($id)
    {
        $story = \App\Story::find($id);
        
        return view('story')->with('story', $story);
    }
}
