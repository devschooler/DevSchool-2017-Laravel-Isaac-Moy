@extends('layouts.app')


@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Bievenue Admin , voici tous les articles et Evènements que les membres ont postés </div>
                    <div class="panel-body">


                         Articles :
                        @foreach($posts as $post)



                            <a href="{{ route('post.show', $post->id ) }}" >

                                <h2> {{ $post->title  }}</h2></a>
                            <p> {{ $post->content  }}</p>
                        @endforeach
                            Evenements:
                            {{ $posts->links()   }}
                            @foreach($events as $event)



                            <a href="{{ route('event.show', $event->id ) }}" >

                                <h2> {{ $event->name  }}</h2></a>
                            <p> {{ $post->description  }}</p>
                        @endforeach


                            {{ $events->links()   }}



@else  VOUS N'ÊTES PAS ADMINISTRATEUR DU SITE

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection