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
                        <h4 class="card-title">{{ __('Réparation') }}</h4>
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
                                <th scope="col" class="text-center">Nature</th>
                                <th scope="col" class="text-center">Date de Réparation</th>
                                <th scope="col" class="text-center">Motif</th>
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
                                    <td class="text-center">{{$immo->prod_nature}}</td>
                                    <td class="text-center">@if($immo->time_rep == null ) <div class="text-danger"  > non réparé </div> @else {{ $immo->time_rep }} @endif</td>
                                    <td class="text-center">{{$immo->description}}</td>
                                    <td class=" td-actions text-right ">
                                    <!-- <a class="btn btn-warning btn-sm" href="">Details</a>-->
                                        <a onclick="confirm('{{ __("etes vous sur de vouloir envoyer a la réparation ?") }}') ? this.parentElement.submit() : ''" rel="tooltip" class="btn btn-success btn-link" href="{{ url ('immo/'.$immo->id.'/edit2')}}" data-original-title="" title="">
                                            <i class="material-icons">construction</i>
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
