<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
	$Projects = \DB::table('projects')->get();
	
        return view('welcome', compact('Projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show');
    }
    
    public function store() {

	$project = new Project;

	$project->pname = request('pname');
	$project->pdesc = request('pdesc');
	$project->idate = request('idate');
	$project->edate = request('edate');

	$project->save();

	return redirect('/');
    }
}
