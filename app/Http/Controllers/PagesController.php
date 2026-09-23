<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pageData = [
            'pageTitle' => 'Romina PLC — Official Website',
            'pageCode' => 'Home',
        ];

        return view('homepage.indexPage')->with($pageData);
    }

    public function about()
    {
        return redirect('/#about');
    }

    public function team()
    {
        return redirect('/#executive-team');
    }

    public function news()
    {
        return redirect('/#news');
    }

    public function contact()
    {
        return redirect('/#contact');
    }
}
