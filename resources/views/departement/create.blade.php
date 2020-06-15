@extends('layouts.app', ['activePage' => 'Acquisition', 'titlePage' => ('User Profile')])
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
                <form action="{{url('departement')}}"  method="post" >

                    {{csrf_field()}}
                    <div class="card ">

                        <div class="card-header card-header-warning">
                            <h4 class="card-title">{{ __('Nouveau Departement') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Nom</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('prod_name')) has-danger @endif">
                                    <input  type="text" name="departemenet_name" class="form-control " value="{{old('departemenet_name')}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Nombre de service</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('departemenet_number_service')) has-danger @endif">
                                    <input  type="number" name="departemenet_number_service" class="form-control" value="{{old('departemenet_number_service')}}">
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Chef de departement</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('departemenet_boss')) has-danger @endif">
                                    <input  type="text" name="departemenet_boss" class="form-control" value="{{old('departemenet_boss')}}">
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
