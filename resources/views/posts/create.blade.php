@extends('layouts.app')


@section('content')
    afficher le formulaire de publication d'article

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">création d'article </div>
                    <div class="panel-body">

                        {!! Form::open(array('route' => 'post.store', 'method' => 'POST')) !!}


                        {!! Form:: label('Title' , 'titre') !!}

                        {!! Form:: text('title',  null , [ 'class' => 'form-control',
                        'placeholder' => 'Titre']) !!}



                        {!! Form:: label('Content' , 'contenu') !!}

                        {!! Form:: textarea('content',  null , [ 'class' => 'form-control',
                        'placeholder' => 'contenu']) !!}
                        {!! Form::submit('Publier') !!}
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection