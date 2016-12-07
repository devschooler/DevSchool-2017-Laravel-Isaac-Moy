@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Votre Profil</div>

                    <h3><strong> Username : {{Auth::user()->name}}</strong></h3>



                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"> Voici vos articles  </div>
                                        <div class="panel-body">


                                            @foreach($posts as $post)


                                                @if ($post->user_id ==  Auth::user()->id)
                                                <a href="{{ route('post.show', $post->id ) }}" >



                                                    <h2> {{ $post->title  }}</h2></a>
                                                <p> {{ $post->content  }}</p>
                                          @endif
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
