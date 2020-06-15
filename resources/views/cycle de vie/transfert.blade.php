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
                        <h4 class="card-title">{{ __('Transfert') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <tr>
                                <th scope="col" class="text-center">Code</th>
                                <th scope="col" class="text-center">Libellé</th>
                                <th scope="col" class="text-center">N°Série</th>
                                <th scope="col" class="text-center">affectation</th>
                                <th scope="col" class="text-center">Date d'acquisition</th>
                                <th scope="col" class="text-center">Date de transfert</th>
                                <th scope="col" class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($immos as $immo)
                                @if($immo->isactif)
                                <tr>
                                    <td class="text-center">{{$immo->id}}</td>
                                    <td class="text-center">{{$immo->prod_name}}</td>
                                    <td class="text-center">{{$immo->prod_serie}}</td>
                                    <td class="text-center">{{$immo->services->service_name}}</td>
                                    <td class="text-center">{{$immo->created_at}}</td>
                                    <td class="text-center">@if($immo->time_trans == null ) <div class="text-danger"  >non transferé </div> @else {{ $immo->time_trans }} @endif</td>
                                    <td class=" td-actions text-right ">
                                    <!-- <a class="btn btn-warning btn-sm" href="">Details</a>
                                            <a  href="{{ url ('immo/'.$immo->id.'/edit') }}" class="btn btn-default btn-sm">Editer</a>
                                            <a  href="" class="btn btn-danger btn-sm">Supprimer</a>-->


                                            <a  href="{{ url ('immo/'.$immo->id.'/edit1') }}"  rel="tooltip" class="btn btn-success btn-round">
                                                <i class="material-icons">compare_arrows</i>
                                            </a>


                                    </td>

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
