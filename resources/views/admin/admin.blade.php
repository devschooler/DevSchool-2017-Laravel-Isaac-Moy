@extends('layouts.app')


@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Bievenue Admin , voici tous les articles et Evènements que les membres ont postés </div>
                    <div class="panel-body">




                        @foreach($posts as $post)





                                <h2> {{ $post->title  }}</h2></a>
                            <p> {{ $post->content  }}</p>
                        @endforeach





                        {{ $posts->links()   }}
@else  VOUS NETES PAS ADMINISTRATEUR DU SITE

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection