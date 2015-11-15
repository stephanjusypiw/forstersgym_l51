<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        // get all the schools from the database
        $schools = School::all();

        // call the view by passing in all the schools as a variable called schools
        return view('schools.schoolshome', ['schools' => $schools ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // use the Find class to get the school object with id.

        // get school object
        $schoolobj = School::find($id);
        // call view passing school object
        return view('students.studentshome', ['schoolobj' => $schoolobj ]);
    }


}
