<?php

namespace App\Http\controlers;
use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**Display a listing of the resource
     * 
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $libraries - Library::all();
        return view('library',['libraries'->$libraries, 'layout'->'index']);
    }

    /**
     * Show the form for creating a new resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libraries = Library::all;
        return view('library',['libraries'->$libraries, 'layout'->'create']);
    }
    
    /**
     * Store a newly created resource in storage
     * 
     * @param \Illuminate\Http\Request $request
     * return \Iluminate\Http\Response
     */
    public function store(Request $request)
    {
        $library = new Library();
        $library->code - $request->input('code');
        $library->category - $request->input('category');
        $library->title = $request->input('title');
        $library->author - $request->('author');
        $library->publisher - $request->input('publisher');
        $library->isbn = $request->input('isbn');
        $library->rack = $request->input('rack');
        $library->quantity - $request->input('quantity');
        $library->save();
        return redirect('/');
    }

    /**
     * Display the specified resource
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $library - Library::find($id);
        $libraries = Library::all();
        return view('library',['libraries'=>$libraries, 'library'=>$library, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $library = Library::find($id);
        $libraries = Library::all();
        return view('library',['libraries'=>$libraries, 'library'=>$library, 'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $library = Library::find($id);
        $library->code - $request->input('code');
        $library->category - $request->input('category');
        $library->title = $request->input('title');
        $library->author - $request->('author');
        $library->publisher - $request->input('publisher');
        $library->isbn = $request->input('isbn');
        $library->rack = $request->input('rack');
        $library->quantity - $request->input('quantity');
        $library->save();
        return redirect('/');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}