@extends('layouts.app', ['activePage' => 'Immobilisation', 'titlePage' => __('User Profile')])

@section('content')
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card ">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">{{ __('Historique') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <tr>
                                <th scope="col" class="text-center">Code</th>
                                <th scope="col" class="text-center">Service</th>
                                <th scope="col" class="text-center">Nombre de reparation</th>
                                <th scope="col" class="text-center">Date d'acquisition</th>
                                <th scope="col" class="text-center">Date de transfert</th>
                                <th scope="col" class="text-center">Date de réparation</th>
                                <th scope="col" class="text-center">Date de Réforme</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($immoss as $immo)
                                    <tr>
                                        <td>{{$historic->immos->id}}</td>
                                        <td>{{$historic->immos->services->service_name}}</td>
                                        <td>{{$historic->number_rep}}</td>
                                        <td>{{$historic->time_ass}}</td>
                                        <td>{{$historic->time_trans}}</td>
                                        <td>{{$immo->time_rep}}</td>
                                        <td>{{$immo->time_ref}}</td>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
