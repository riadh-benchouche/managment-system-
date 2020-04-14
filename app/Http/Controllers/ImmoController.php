<?php

namespace App\Http\Controllers;
use App\Transfert;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;
use Illuminate\Http\Request;
use App\Immo;
use Auth;
use App\Http\Requests\ImmoRequest;

class ImmoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $listimmo= Immo::all();

        return view('cycle de vie.index',['immos'=>$listimmo]);

    }
    public function index1(){

        $listimmo= Transfert::all();

        return view('cycle de vie.transfert',['immoss'=>$listimmo]);


    }
    public function index2(){

        $listimmo= immo::all();

        return view('cycle de vie.rep',['immos'=>$listimmo]);
    }
    public function index3(){

        $listimmo= immo::all();

        return view('cycle de vie.ref',['immos'=>$listimmo]);
    }
    public function create(){


        return view('cycle de vie.create');


    }
    public function store(ImmoRequest $request)

    {
        $immo = new Immo();

        $immo ->code = $request->input('code');
        $immo->lib = $request->input('lib');
        $immo->fournisseur = $request->input('fournisseur');
        $immo->serie = $request->input('serie');
        $immo->affectation = $request->input('affectation');
        $immo->dv = $request->input('dv');
        $immo->type = $request->input('type');
        $immo->cout = $request->input('cout');
        $immo->nature = $request->input('nature');
        $immo->user_id = Auth::user()->id;

        $immo->save();

        $trans = new Transfert();

        $trans ->code = $request->input('code');
        $trans->lib = $request->input('lib');
        $trans->fournisseur = $request->input('fournisseur');
        $trans->serie = $request->input('serie');
        $trans->affectation = $request->input('affectation');
        $trans->dv = $request->input('dv');
        $trans->type = $request->input('type');
        $trans->cout = $request->input('cout');
        $trans->nature = $request->input('nature');
        

        $trans->save();

        session()->flash('success','Immobilisation enregistré');

        return redirect('immo');
    }
    public function edit($id){

        $immo = Immo::find($id);

        return view('cycle de vie.edit', ['immo'=>$immo]);


    }
    public function edit1($id){

        $immo = Transfert::find($id);

        return view('cycle de vie.edit1', ['immo'=>$immo]);
        redirect('cycle de vie.transfert');

    }
    public function edit2($id){

        $immo = Immo::find($id);

        return view('cycle de vie.edit2', ['immo'=>$immo]);


    }
    public function update($id, ImmoRequest $request){
        $immo = Immo::find($id);

        $immo->code = $request->input('code');
        $immo->lib = $request->input('lib');
        $immo->fournisseur = $request->input('fournisseur');
        $immo->serie = $request->input('serie');
        $immo->affectation = $request->input('affectation');
        $immo->dv = $request->input('dv');
        $immo->type = $request->input('type');
        $immo->cout = $request->input('cout');
        $immo->nature = $request->input('nature');

        $immo->save();
        return redirect('immo');
    }
    public function destroy(Request $request,$id){

        $immo = Immo::find($id);

        $immo -> delete();
         return redirect('immo');

    }

}
