<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use PDO;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
	
	//$pdo = DB::connection('mysql')->getPdo();

	try {
	    $Projects = \DB::table('projects')->get();
	} catch (Exception $e) {
	  //PDOException $e) {
	  die("DB ERROR: " . $e->getMessage() . "\n");
	}

	//return view('welcome');
	
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
	$project->timestamps = false;
	try{
	  $project->save();
	} catch (Exception $e) {
	  die("Error: " . $e->getMessage());
	}
	return redirect('/');
    }
}
