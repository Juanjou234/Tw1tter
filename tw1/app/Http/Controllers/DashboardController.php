<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $idea = new Idea(
        //     [
        //         'content' => 'Hello World',
        //         'likes' => 32
        // ]);
        // $idea->content = 'test';
        // $idea->likes = 0;
        // $idea->save();

        // dump(Idea::all());

        return view(
            'dashboard',
            [
                'ideasList' => Idea::orderBy('created_at', 'DESC')->get(),
            ]
        );
    }
}
