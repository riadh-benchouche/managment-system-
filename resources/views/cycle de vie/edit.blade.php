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
                                <label  class="col-sm-2 col-form-label mt-1" >Code</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('code')) has-danger @endif" >
                                    <input  type="number" name="code" class="form-control has-danger" value="{{$immo->code}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Libellé</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('lib')) has-danger @endif" >
                                    <input  type="text" name="lib" class="form-control"  value="{{$immo->lib}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Fournisseur</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('fournisseur')) has-danger @endif" >
                                    <input  type="text" name="fournisseur" class="form-control" value="{{$immo->fournisseur}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">N°Série</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('serie')) has-danger @endif" >
                                     <input  type="text" name="serie" class="form-control" value="{{$immo->serie}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Dommaine d'affectation</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('affectation')) has-danger @endif" >
                                    <select name="affectation" class="form-control " data-style="btn btn-link" value="{{$immo->affectation}}" >
                                        <option value="non affecté" selected>Non affecté</option>
                                        <option value="complexe" >Complexe</option>
                                        <option value="urf1">URF 1</option>
                                        <option value="urf2">URF 2</option>
                                        <option value="tv">TV</option>
                                        <option value="mobile">Mobile IT</option>
                                        <option value="mal">Machine a lavée</option>
                                        <option value="injection" >Injection</option>
                                        <option value="parc" >Parc Logistique</option>
                                        <option value="pneu">Pneu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Type d'acquisition</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('type')) has-danger @endif" >
                                    <select name="type" class="form-control " data-style="btn btn-link" value="{{$immo->type}}" id="Formtype">
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
                                <div class="col-sm-7 mt-2 @if($errors->get('nature')) has-danger @endif" >
                                    <select name="nature" class="form-control " data-style="btn btn-link" value="{{$immo->nature}}"  id="Formnature">
                                        <option value="complexe">acquisition</option>
                                        <option value="urf1">livraison a soi-meme</option>
                                        <option value="urf2">location</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">couts</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('cout')) has-danger @endif">
                                    <input  type="number" name="cout" class="form-control" value="{{$immo->cout}}">
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
