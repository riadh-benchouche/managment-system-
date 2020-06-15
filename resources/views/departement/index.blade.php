@extends('layouts.app', ['activePage' => 'Departement', 'titlePage' => __('User Profile')])

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

                <div class="col-sm-4 pull-right mb-4 ">

                    <a class=" btn btn-sm btn-primary " href="{{ url('departement/create') }}">
                        <div class="text-center">
                            <p>{{ __('Nouvelle Acquisition') }}</p>
                        </div>
                    </a>

                </div>
                <div class="card ">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">{{ __('Departement') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">nom</th>
                                <th scope="col" class="text-center">Nombre de service</th>
                                <th scope="col" class="text-center">Chef département</th>
                                <th scope="col" class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departements as $departement)
                                <tr>
                                    <td class="text-center">{{$departement->departemenet_id}}</td>
                                    <td class="text-center">{{$departement->departemenet_name}}</td>
                                    <td class="text-center">{{$departement->departemenet_number_service}}</td>
                                    <td class="text-center">{{$departement->departemenet_boss}}</td>
                                    <td class=" td-actions text-right ">
                                    <!-- <a class="btn btn-warning btn-sm" href="">Details</a>
                                            <a  href="{{ url ('departement/'.$departement->id.'/edit') }}" class="btn btn-default btn-sm">Editer</a>
                                            <a  href="" class="btn btn-danger btn-sm">Supprimer</a>-->
                                        <form action="{{ url('departement/'.$departement->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ url ('departement/'.$departement->id.'/edit')}}" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("supprimer ?") }}') ? this.parentElement.submit() : ''">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </form>


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
