@extends('layouts.app', ['activePage' => 'Immobilisation', 'titlePage' => __('User Profile')])

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
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ url('immo/create')  }}" class="btn btn-sm btn-success">{{ __('Ajouter') }}</a>
                            </div>
                        </div>
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
                                    @if($immo->isactif)
                                    <tr>
                                        <td>{{$immo->id}}</td>
                                        <td>{{$immo->prod_name}}</td>
                                        <td>{{$immo->prod_prov}}</td>
                                        <td>{{$immo->prod_serie}}</td>
                                        <td>{{$immo->services->service_name}}</td>
                                        <td>{{$immo->prod_nature}}</td>
                                        <!-- <td>{{$immo->dv}}</td>-->
                                        <td>{{$immo->prod_type}}</td>
                                        <td>{{$immo->created_at}}</td>
                                        <td>{{$immo->prod_coast}} DZD</td>
                                        <td class=" td-actions text-righ  ">
                                           <!-- <a class="btn btn-warning btn-sm" href="">Details</a>
                                            <a  href="{{ url ('reforme/'.$immo->id.'/edit') }}" class="btn btn-default btn-sm">Editer</a>
                                            <a  href="" class="btn btn-danger btn-sm">Supprimer</a>-->

                                               <form  class="d-inline" action="{{ url('reforme/'.$immo->id) }}" method="post" >
                                                   @csrf
                                                   @method('PUT')
                                               <button type="submit" rel="tooltip" class="btn btn-danger btn-link"  data-original-title="" title="">
                                                   <i class="material-icons">delete_forever</i>
                                                   <div class="ripple-container"></div>
                                               </button>
                                               </form>

                                               <form  class="d-inline" action="{{ url('immo/'.$immo->id) }}" method="post">
                                                   @csrf
                                                   @method('delete')

                                                   <a rel="tooltip" class="btn btn-success btn-link" href="{{ url ('immo/'.$immo->id.'/edit')}}" data-original-title="" title="">
                                                       <i class="material-icons">edit</i>
                                                       <div class="ripple-container"></div>
                                                   </a>
                                                   <button type="button" class="btn btn-warning btn-link" data-original-title="" title="" onclick="confirm('{{ __("supprimer ?") }}') ? this.parentElement.submit() : ''">
                                                       <i class="material-icons">close</i>
                                                       <div class="ripple-container"></div>
                                                   </button>
                                               </form>

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
