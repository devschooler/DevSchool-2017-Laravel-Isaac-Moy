@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $event->name  }}</div>
                    <div class="panel-body">

                        description : {{ $event->description }} </br>

                        Date de début {{ $event->start }} </br>
                        Date de fin {{ $event->end }} </br>
                        lieu : {{ $event->lieu }} </br>
                        prix : {{ $event->tarif}} </br>


                        <br>
                        organisateur : {{$event->user->name}}



                        <br>

                        @if(Auth::check() )


                            <a href="{{ route('event.edit',$event->id) }}" >Modifier</a> <br>

                            {!! Form::model(
                                                 $event,
                                                 array(
                                                 'route' => array( 'event.destroy', $event->id),
                                                 'method' => 'DELETE')) !!}





                            {!! Form::submit('supprimer',
                            ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endif


                        <a href="{{ route('event.index') }}"> Retour aux articles </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

