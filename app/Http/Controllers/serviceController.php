<?php

namespace App\Http\Controllers;

use App\Departement;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;



class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listservice= Service::all();

        return view('service.index',['services'=>$listservice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listdepartement =Departement::all();
        return view('service.create', ['departements'=>$listdepartement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();

        $service->service_name = $request->input('service_name');
        $service->service_number_empoloyee = $request->input('service_number_empoloyee');
        $service->service_phone = $request->input('service_phone');
        $service->service_d = $request->input('service_d');
        $service->d_id = $request->input('service_d');


        $service->save();

        session()->flash('success','Service enregistré');

        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $listdepartement =Departement::all();

        return view('service.edit', ['service'=>$service],['departements'=>$listdepartement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);

        $service->service_name = $request->input('service_name');
        $service->service_number_empoloyee = $request->input('service_number_empoloyee');
        $service->service_phone = $request->input('service_phone');
        $service->service_d = $request->input('service_d');
        $service->d_id = $request->input('service_d');



        $service->save();
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $service = Service::find($id);

        $service -> delete();
        return redirect('service');
        //
    }
}
