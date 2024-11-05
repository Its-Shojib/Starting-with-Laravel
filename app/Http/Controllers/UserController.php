<?php 
namespace App\Http\controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
       return view('user');
    }

    function aboutUser($name){
        return "This is $name";
    }
}