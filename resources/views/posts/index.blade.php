@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> liste des articles , enjoy yourself :)  </div>
                    <div class="panel-body">


                        @foreach($posts as $post)

                            <a href="{{ route('post.show', $post->id ) }}" >



                                <h2> {{ $post->title  }}</h2></a>
                            <p> {{ $post->content  }}</p>
                        @endforeach

                        {{ $posts->links()   }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection