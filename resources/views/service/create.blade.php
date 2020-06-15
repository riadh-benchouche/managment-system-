@extends('layouts.app', ['activePage' => 'Service', 'titlePage' => ('User Profile')])
@section('content')
    <br>
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




    <div class="container mt-1 ">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('service')}}"  method="post" >

                    {{csrf_field()}}
                    <div class="card ">

                        <div class="card-header card-header-warning">
                            <h4 class="card-title">{{ __('Nouveau service') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Nom</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('service_name')) has-danger @endif">
                                    <input  type="text" name="service_name" class="form-control " value="{{old('service_name')}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  for="Formdepartement" class="col-sm-2 col-form-label mt-1">Département</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('service_d')) has-danger @endif">
                                    <select name="service_d" class="form-control " data-style="btn btn-link" value="{{old('service_d')}}" id="Formaffectation">
                                        @foreach($departements as $departement)
                                            <option value="{{$departement->departemenet_id}}" selected>{{$departement->departemenet_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Nombre employee</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('service_number_empoloyee')) has-danger @endif">
                                    <input  type="number" name="service_number_empoloyee" class="form-control" value="{{old('service_number_empoloyee')}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Numero de telephone</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('service_phone')) has-danger @endif">
                                    <input  type="text" name="service_phone" class="form-control" value="{{old('service_phone')}}">
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-warning">{{ __('Enregistrer') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
