<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class PagesController extends Controller
{
    public function index(){
        $lessons = {};
        
    }
     public function about(){
        return 'Learn & Little about me';
    }
}
