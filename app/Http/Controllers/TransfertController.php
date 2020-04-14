<?php

namespace App\Http\Controllers;

use App\Http\Requests\immoRequest;
use App\Immo;
use App\Transfert;
use Illuminate\Http\Request;

class TransfertController extends Controller
{





    public function store(ImmoRequest $request){

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

        return redirect('immo/tran');
    }


    public function edit1($id){

        $immo = Immo::find($id);

        return view('cycle de vie.edit1', ['immo'=>$immo]);


    }

    public function index1(){

        $listimmo= immo::all();

        return view('cycle de vie.transfert',['immoss'=>$listimmo]);


    }
}
