@extends('layouts.app', ['activePage' => 'Service', 'titlePage' => __('User Profile')])

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

                    <a class=" btn btn-sm btn-primary " href="{{ url('service/create') }}">
                        <div class="text-center">
                            <p>{{ __('Nouveau service') }}</p>
                        </div>
                    </a>

                </div>
                <div class="card ">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">{{ __('Service') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">nom</th>
                                <th scope="col" class="text-center">Nom de departement</th>
                                <th scope="col" class="text-center">Nombre de employees</th>
                                <th scope="col" class="text-center">numero de telephone</th>
                                <th scope="col" class="text-center" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td class="text-center">{{$service->service_id}}</td>
                                    <td class="text-center">{{$service->service_name}}</td>
                                    <td class="text-center">{{$service->departements->departemenet_name}}</td>
                                    <td class="text-center">{{$service->service_number_empoloyee}}</td>
                                    <td class="text-center">{{$service->service_phone}}</td>
                                    <td class=" td-actions text-right ">
                                    <!-- <a class="btn btn-warning btn-sm" href="">Details</a>
                                            <a  href="{{ url ('$service/'.$service->id.'/edit') }}" class="btn btn-default btn-sm">Editer</a>
                                            <a  href="" class="btn btn-danger btn-sm">Supprimer</a>-->
                                        <form action="{{ url('service/'.$service->service_id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ url ('service/'.$service->service_id.'/edit')}}" data-original-title="" title="">
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
