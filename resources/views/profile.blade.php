@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil</div>

                    <h3><strong> Username : {{Auth::user()->name}}</strong></h3>


--}}
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
