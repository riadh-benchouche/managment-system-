<?php

namespace App\Http\Controllers;

use App\Events\NewProductCreatedEvent;
use App\Events\ProductRepareEvent;
use App\Events\ProductTransferedEvent;
use App\Historic;
use App\Notifications\NewProductCreated;
use App\Service;
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


    public function index()
    {

        $listimmo = Immo::all();


        return view('cycle de vie.index', ['immoss' => $listimmo]);



    }

    public function transfert()
    {
        $listimmo = Immo::all();
        return view('cycle de vie.transfert', ['immos' => $listimmo]);

    }

    public function rep()
    {
        $listimmo = Immo::all();
        return view('cycle de vie.rep', ['immos' => $listimmo]);

    }

    public function ref()
    {
        $listimmo = Immo::all();
        return view('cycle de vie.ref', ['immos' => $listimmo]);

    }

    public function create()
    {

        $listservice = Service::all();


        return view('cycle de vie.create', ['services' => $listservice]);


    }

    public function store(ImmoRequest $request)

    {

        $immo = new Immo();

        // dd($request);
        $immo->prod_name = $request->input('prod_name');
        $immo->prod_prov = $request->input('prod_prov');
        $immo->prod_serie = $request->input('prod_serie');
        $immo->prod_lifetime = $request->input('prod_lifetime');
        $immo->prod_type = $request->input('prod_type');
        $immo->prod_coast = $request->input('prod_coast');
        $immo->prod_nature = $request->input('prod_nature');
        $immo->prod_service = $request->input('prod_service');
        $immo->service_id = $request->input('prod_service');
        $immo->user_id = Auth::user()->id;

        $immo->save();

        //Notification
        //$immo->notify(new NewProductCreated($immo));

        session()->flash('success', 'Immobilisation enregistré');
        // event
        event(new NewProductCreatedEvent($immo));

       // dd($immo->unreadNotifications->first()->data['productId']);

        return redirect('immo');
    }

    public function notification(){

       // dd(Auth::user()->unreadNotifications->first()->data['productId']);
    }

    public function edit($id)
    {

        $immo = Immo::find($id);
        $listservice = Service::all();

        return view('cycle de vie.edit', ['immo' => $immo, 'services' => $listservice]);


    }

    public function edit1($id)
    {

        $immo = Immo::find($id);
        $listservice = Service::all();

        return view('cycle de vie.edit1', ['immo' => $immo, 'services' => $listservice]);

    }

    public function edit2($id)
    {

        $immo = Immo::find($id);


        return view('cycle de vie.edit2', ['immo' => $immo]);

    }

    public function update($id, ImmoRequest $request)
    {

        $immo = Immo::find($id);

        $immo->prod_name = $request->input('prod_name');
        $immo->prod_prov = $request->input('prod_prov');
        $immo->prod_serie = $request->input('prod_serie');
        $immo->prod_service = $request->input('prod_service');
        $immo->prod_lifetime = $request->input('prod_lifetime');
        $immo->prod_type = $request->input('prod_type');
        $immo->prod_coast = $request->input('prod_coast');
        $immo->prod_nature = $request->input('prod_nature');
        $immo->service_id = $request->input('prod_service');

        $immo->save();


        return redirect('immo');
    }

    public function updateT($id, ImmoRequest $request)

    {

        $immo = Immo::find($id);


        $immo->prod_service = $request->input('prod_service');
        $immo->service_id = $request->input('prod_service');

        $immo->time_trans = $request->input('time_trans');


        $immo->save();

        event(new ProductTransferedEvent($immo));


        return redirect('immo/transfert');

    }

    public function updateR($id, ImmoRequest $request)

    {

        $immo = Immo::find($id);

        $immo->time_rep = $request->input('time_rep');
        $immo->description = $request->input('description');

        $immo->save();

        event(new ProductRepareEvent($immo));

        return redirect('immo/rep');
    }

    public function update1($id, ImmoRequest $request)

    {

        $immo = Immo::find($id);

        $immo->isactif = false;

        $immo->save();
        return redirect('immo');
    }

    public function destroy(Request $request, $id)
    {

        $immo = Immo::find($id);
        $immo->delete();

        return redirect('immo');

    }


}
