@extends('layouts.app', ['activePage' => 'Editer', 'titlePage' => __('Edit')])
@section('content')
    <br>


    @if(count($errors))

        <div class="alert alert-danger mt-3 col-md-8 col-md-offset-2" role="alert">
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('immo/'.$immo->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="card ">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">{{ __('Edit Immobilisation') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Libellé</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_name')) has-danger @endif" >
                                    <input  type="text" name="prod_name" class="form-control"  value="{{$immo->prod_name}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Fournisseur</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_prov')) has-danger @endif" >
                                    <input  type="text" name="prod_prov" class="form-control" value="{{$immo->prod_prov}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">N°Série</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_serie')) has-danger @endif" >
                                     <input  type="text" name="prod_serie" class="form-control" value="{{$immo->prod_serie}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Dommaine d'affectation</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_service')) has-danger @endif" >
                                    <select name="prod_service" class="form-control " data-style="btn btn-link" value="{{$immo->prod_service}}" >
                                        @foreach($services as $service)
                                            <option value="{{$service->service_id}}" selected>{{$service->service_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Type d'acquisition</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_type')) has-danger @endif" >
                                    <select name="prod_type" class="form-control " data-style="btn btn-link" value="{{$immo->prod_type}}" id="Formtype">
                                        <option value="terrains">Terrains</option>
                                        <option value="constructions">Construction</option>
                                        <option value="Matériels de transport">Matériels de transport</option>
                                        <option value="mobilier">Mobilier</option>
                                        <option value="Materiels de bureau et informatique">Materiels de bureau et informatique</option>
                                        <option value="Aménagements et agencements">Aménagements et agencements</option>
                                        <option value="Installations techniques et outillages industriels">Installations techniques et outillages industriels</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Nature d'acquisition</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_nature')) has-danger @endif" >
                                    <select name="prod_nature" class="form-control " data-style="btn btn-link" value="{{$immo->prod_nature}}"  id="Formnature">
                                        <option value="complexe">acquisition</option>
                                        <option value="urf1">livraison a soi-meme</option>
                                        <option value="urf2">location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">couts</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_coast')) has-danger @endif">
                                    <input  type="number" name="prod_coast" class="form-control" value="{{$immo->prod_coast}}">
                                </div>
                            </div>
                            </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-warning">{{ __('Modifier') }}</button>
                                </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection
