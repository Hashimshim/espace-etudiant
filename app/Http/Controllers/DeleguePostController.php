<?php

namespace App\Http\Controllers;

use App\Models\Deleguepost;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class DeleguePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Deleguepost::latest()->paginate(5);
        $profposts = DB::table('profposts')->select('*')->paginate(5);
        return view('post',compact('posts','profposts'))->with(request()->input('page'));
    }


    public function dashboard()
    {
        //
        $posts=Deleguepost::latest()->paginate(6);
        return view('postdashboard',compact('posts'))->with(request()->input('page'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('creerpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'message' => 'required'
        ]
        );
        
        //create
        Deleguepost::create($request->all());
        //redirect user
        return redirect('post')->with('success','Product created successfully');;
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deleguepost  $deleguepost
     * @return \Illuminate\Http\Response
     */
    public function show(Deleguepost $deleguepost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deleguepost  $deleguepost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=Deleguepost::find($id);
        return view('modifierpost',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deleguepost  $deleguepost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'message' => 'required'
        ]
        );

        $post=Deleguepost::find($id);
        $post->nom=$request->input('nom');
        $post->prenom=$request->input('prenom');
        $post->message=$request->input('message');
        $post->save();

        return redirect('postdashboard')
                        ->with('success','Message mis à jour avec succes');

    }
    public function delete($id){

        DB::delete('delete from delegueposts where id = ?',[$id]);
        return redirect('postdashboard')->with('success','Message supprimé avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deleguepost  $deleguepost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deleguepost $deleguepost)
    {
        //
        // Deleguepost::find($deleguepost)->each->delete();

        // return redirect('postdashboard')
        // ->with('success','Message supprimé avec succes');
    }
}
