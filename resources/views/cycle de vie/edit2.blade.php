@extends('layouts.app', ['activePage' => 'Editer', 'titlePage' => __('Edit')])
@section('content')
    <br>


    @if(count($errors))
        <br>
        <div class="alert alert-danger mt-5 col-md-8 col-md-offset-2 " role="alert">
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
                <form action="{{url('immoR/'.$immo->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="card ">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">{{ __('Edit Immobilisation') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Date de reparation</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('time_rep')) has-danger @endif">
                                    <input  type="date" name="time_rep" class="form-control" value="{{$immo->time_rep}}" >
                                </div>
                            </div>
                            <div class="row">
                                <label  class="col-sm-2 col-form-label mt-1">Motif</label>
                                <div class="col-sm-7 mt-2 @if($errors->get('description')) has-danger @endif">
                                    <input  type="text" name="description" class="form-control" value="{{$immo->description}}" >
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning">{{ __('Envoyer à la réparation') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
