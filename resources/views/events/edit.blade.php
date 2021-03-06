@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Edition d'évènement </div>
                    <div class="panel-body">

                        {!! Form::model(
                      $event,
                      array(
                      'route' => array( 'event.update', $event->id),
                      'method' => 'PUT')) !!}


                        {!! Form:: label('name' , 'Nom') !!}

                        {!! Form:: text('name',  null , [ 'class' => 'form-control',
                        'placeholder' => 'Nom']) !!}



                        {!! Form:: label('description' , 'description') !!}

                        {!! Form:: textarea('description',  null , [ 'class' => 'form-control',
                        'placeholder' => 'description']) !!}

                        {!! Form:: label('start' , 'date de début ') !!}

                        {!! Form:: text('start',  null , [ 'class' => 'form-control',
                        'placeholder' => 'date de début']) !!}

                        {!! Form:: label('end' , 'date de fin ') !!}

                        {!! Form:: text('end',  null , [ 'class' => 'form-control',
                        'placeholder' => 'date de fin']) !!}

                        {!! Form:: label('lieu' , 'lieu ') !!}

                        {!! Form:: text('lieu',  null , [ 'class' => 'form-control',
                        'placeholder' => 'lieu']) !!}

                        {!! Form:: label('tarif' , 'tarif ') !!}

                        {!! Form:: text('tarif',  null , [ 'class' => 'form-control',
                        'placeholder' => 'tarif']) !!}


                        {!! Form::submit('Appliquer les modifications') !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection