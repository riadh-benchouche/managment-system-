@extends('layouts.app', ['activePage' => 'Transfert', 'titlePage' => __('User Profile')])

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
                                <th scope="col" class="text-center">Date d'acquisition</th>
                                <th scope="col" class="text-center">Couts d'acquisition</th>
                                <th scope="col" class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($immoss as $immo)
                                <tr>
                                    <td>{{$immo->code}}</td>
                                    <td>{{$immo->lib}}</td>
                                    <td>{{$immo->fournisseur}}</td>
                                    <td>{{$immo->serie}}</td>
                                    <td>{{$immo->affectation}}</td>
                                    <td>{{$immo->nature}}</td>
                                <!-- <td>{{$immo->dv}}</td>-->
                                    <td>{{$immo->type}}</td>
                                    <td>{{$immo->created_at}}</td>
                                    <td>{{$immo->cout}} DZD</td>
                                    <td class=" td-actions text-right ">
                                    <!-- <a class="btn btn-warning btn-sm" href="">Details</a>
                                            <a  href="{{ url ('immo/'.$immo->id.'/edit') }}" class="btn btn-default btn-sm">Editer</a>
                                            <a  href="" class="btn btn-danger btn-sm">Supprimer</a>-->


                                            <a  href="{{ url ('immo/'.$immo->id.'/edit1') }}"  rel="tooltip" class="btn btn-success btn-round">
                                                <i class="material-icons">compare_arrows</i>
                                            </a>


                                    </td>

                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
