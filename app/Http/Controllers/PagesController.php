<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class PagesController extends Controller
{
    public function index(){
        $lessons = ['My First Lesson','My Second Lesson','My Third Lesson'];
        $name = 'Harry Potter';
        return view('pages.home',['name' => $name,'lessonsArr' => $lessons]);
    }
     public function about(){
     	$people = [
     		'Taylor Otwell', 'Dayle Rees', 'supattra'
     	];
        return view('pages.about', compact('people'));
    }
}
