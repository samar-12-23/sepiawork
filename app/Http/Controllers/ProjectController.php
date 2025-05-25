<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        //dd('OOKK');
        return view('project');
    }
}
