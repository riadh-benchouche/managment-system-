@extends('layouts.app', ['activePage' => 'Notification', 'titlePage' => __('User Profile')])

@section('content')
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card ">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">{{ __('Notifications') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead class="text-warning">
                            <tr>
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">Contenu</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr >

                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
