@extends('layouts.app')


@section('content')
    afficher un article

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title  }}</div>
                    <div class="panel-body">

                        {{ $event->content  }}
                        <br>
                        Auteur : {{$event->user->name}}



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

