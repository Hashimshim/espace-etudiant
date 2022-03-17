<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\Deleguepost;

class AnnonceController extends Controller
{
    // retourne tous les indexes
    public function index(){
        $annonces = DB::table('annonce')->select('*')->paginate(2);
        $post=Deleguepost::latest()->first();
        $profpost = DB::table('profposts')->select('*')->orderBy('id','DESC')->first();
        return view('annonce',compact('annonces','post','profpost'))->with(request()->input('page'));
        }

        //get post by id
    public function edit($id)
        {
            $annonce = DB::table('annonce')->where('id_annonce', '=', $id)->first();
            return view('annoncedetail',compact('annonce'));
        }

}
