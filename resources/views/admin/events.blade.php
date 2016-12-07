@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> liste des évènements , enjoy yourself :)  </div>
                    <div class="panel-body">


                        @foreach($events as $event)

                            <a href="{{ route('event.show', $event->id ) }}" >



                                <h2> {{ $event->name  }}</h2>   </a>
                            <p> {{ $event->description  }}</p>
                        @endforeach

                        {{ $events->links()   }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection