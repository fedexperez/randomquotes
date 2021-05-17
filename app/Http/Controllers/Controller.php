<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $quotes = array(
        "https://memesrandomtopicos.s3.amazonaws.com/meme1.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme2.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme1.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme3.jpeg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme4.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme5.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme6.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme7.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme8.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme9.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme10.png",
        "https://memesrandomtopicos.s3.amazonaws.com/meme11.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme12.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme13.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme14.jpg",
        "https://memesrandomtopicos.s3.amazonaws.com/meme15.jpg",
    );

    public function index()
    {
        $data = [];
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomimage = Controller::$quotes[$randomNumber];

        $data['randomimage'] = $randomimage;
        $data['server_ip'] = gethostbyname(gethostname());

        return view('image')->with('data', $data);
    }

    
}


