<?php

namespace App\Http\Controllers;

use App\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\DepartementRequest;


class departementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdepartement= Departement::all();

        return view('departement.index',['departements'=>$listdepartement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departement.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departement = new Departement();

        $departement->departemenet_name = $request->input('departemenet_name');
        $departement->departemenet_number_service = $request->input('departemenet_number_service');
        $departement->departemenet_boss = $request->input('departemenet_boss');


        $departement->save();

        session()->flash('success','Departement enregistré');

        return redirect('departement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departement = Departement::find($id);

        return view('departement.edit', ['departement'=>$departement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(DepartementRequest $request, $id)
    {
        $departement = Departement::find($id);

        $departement->departemenet_name = $request->input('departemenet_name');
        $departement->departemenet_number_service = $request->input('departemenet_number_service');
        $departement->departemenet_boss = $request->input('departemenet_boss');


        $departement->save();
        return redirect('departement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $departement = Departement::find($id);

        $departement -> delete();
        return redirect('departement');
    }
}
