@extends('layouts.app', ['activePage' => 'Réparation', 'titlePage' => __('User Profile')])

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
                                <th scope="col" class="text-center">Date de Réparation</th>
                                <th scope="col" class="text-center">Description</th>
                                <th scope="col" class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($immos as $immo)
                                <tr>
                                    <td>{{$immo->code}}</td>
                                    <td>{{$immo->lib}}</td>
                                    <td>{{$immo->fournisseur}}</td>
                                    <td>{{$immo->serie}}</td>
                                    <td>{{$immo->affectation}}</td>
                                    <td>{{$immo->nature}}</td>
                                <!-- <td>{{$immo->dv}}</td>-->
                                    <td>{{$immo->type}}</td>
                                    <td>{{$immo->date_rep}}</td>
                                    <td>{{$immo->description}} DZD</td>
                                    <td class=" td-actions text-right ">
                                    <!-- <a class="btn btn-warning btn-sm" href="">Details</a>-->
                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ url ('immo/'.$immo->id.'/edit2')}}" data-original-title="" title="">
                                            <i class="material-icons">edit</i>
                                            <div class="ripple-container"></div>
                                        </a>
                                  <!--      <form action="{{ url('immo/'.$immo->id) }}" method="post">

                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("etes vous sur de vouloir envoyer a la réparation ?") }}') ? this.parentElement.submit() : ''">
                                                <i class="material-icons">build</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </form>  -->

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
