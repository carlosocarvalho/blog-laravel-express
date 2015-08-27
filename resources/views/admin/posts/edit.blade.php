@extends('admin.tpl-admin')

@section('content')

    <div class="col-xs-12 col-md-10 col-md-offset-1 ">
        <div class="form-admin">
            <h2> Post Editar  </h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all()  as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!!  Form::model($post, ['method'=>'put','route'=>['admin.posts.update',$post->id]]) !!}

           @include('admin.posts.frm')

            <div class="form-group">
                {!! Form::submit('Salvar os Dados',['class'=>'btn btn-primary']) !!}

                <a href="{{ route('admin.posts.index') }}" class="btn btn-danger">Cancelar</a>
            </div>
            {!! Form::close() !!}


        </div>

    </div>

@stop