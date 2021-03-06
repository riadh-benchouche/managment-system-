@extends('layouts.app', ['activePage' => 'Réforme', 'titlePage' => __('User Profile')])

@section('content')
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif


                <div class="card ">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">{{ __('Immobilisations Corporelles') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <tr>
                                <th scope="col" class="text-center">Code</th>
                                <th scope="col" class="text-center">Libellé</th>
                                <th scope="col" class="text-center">Fournisseur</th>
                                <th scope="col" class="text-center">N°Série</th>
                                <th scope="col" class="text-center">affectation</th>
                                <th scope="col" class="text-center">Nature</th>
                                <!--   <th scope="col" class="text-center">Durée de vie </th>-->
                                <th scope="col" class="text-center">type d'acquisition</th>
                                <th scope="col" class="text-center">Date de Réforme</th>
                                <th scope="col" class="text-center">Couts d'acquisition</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($immos as $immo)
                                @if($immo->isactif==false)
                                <tr>
                                    <td>{{$immo->id}}</td>
                                    <td>{{$immo->prod_name}}</td>
                                    <td>{{$immo->prod_prov}}</td>
                                    <td>{{$immo->prod_serie}}</td>
                                    <td>{{$immo->prod_service}}</td>
                                    <td>{{$immo->prod_nature}}</td>
                                <!-- <td>{{$immo->dv}}</td>-->
                                    <td>{{$immo->prod_type}}</td>
                                    <td>{{$immo->deleted_at}}</td>
                                    <td>{{$immo->prod_coast}} DZD</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
