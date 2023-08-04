<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
    $data_news = \App\Models\News::all();
    return view('welcome',['data_news' => $data_news]);
    }

    private $uri = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=441d3e04c5d44292aed830236006f99d';

    public function getNewsApi()
    {
        $apiKey = '441d3e04c5d44292aed830236006f99d';
        $apiUrl = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=' . $apiKey;

        $client = new Client();
        $response = $client->get($apiUrl);

        $news = json_decode($response->getBody(), true);

        return view('welcome',['news' => $news]);
    }
}



