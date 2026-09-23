<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pageData = [
            'pageTitle' => 'Romina PLC — Official Website',
            'pageCode' => 'Home',
        ];
        
        return view('homepage.indexPage')->with($pageData);
    }
    
    public function about()
    {
        $pageData = [
            'pageTitle' => 'Romina PLC — About',
            'pageCode' => 'About',
        ];
        
        return view('homepage.about')->with($pageData);
    }
    
    public function team()
    {
        $pageData = [
            'pageTitle' => 'Romina PLC — Team',
            'pageCode' => 'Team',
        ];
        
        return view('homepage.team')->with($pageData);
    }
    
    public function news()
    {
        $pageData = [
            'pageTitle' => 'Romina PLC — News',
            'pageCode' => 'News',
        ];
        
        return view('homepage.news')->with($pageData);
    }
    
    public function contact()
    {
        $pageData = [
            'pageTitle' => 'Romina PLC — Contact',
            'pageCode' => 'Contact',
        ];
        
        return view('homepage.contact')->with($pageData);
    }
}
