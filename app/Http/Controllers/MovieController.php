<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();
        
        $img = [
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],
            [
                'src' => 'https://images2.alphacoders.com/110/thumb-1920-1108220.jpg'
            ],

        ];

        return view('home', compact('movies'))
        ->with('img',$img);
    }
}
