<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ScraperService;

class ScraperController extends Controller
{
    /**
     * Get all the jobs openings at a specified url
     */
    public function index(ScraperService $scraperService){
        $url = 'https://stackoverflow.com/jobs?l=South+Africa&d=20&u=Km';
        $data = $scraperService->scrap($url);
    return view('scrap', $data);
    }

    public function scrapnew(ScraperService $scraperService){
        $url = 'https://www.myntra.com/tshirts/hrx-by-hrithik-roshan/hrx-by-hrithik-roshan-men-yellow-printed-cotton-t-shirt/1700944/buy';
        return $data = $scraperService->scrapMyntra($url);
        //return view('scrap', $data);
    }
}
