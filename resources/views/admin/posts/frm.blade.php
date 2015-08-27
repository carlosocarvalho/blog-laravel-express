<div class="form-group">
    {!! Form::label('Titulo') !!}
    {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Digite o titulo']) !!}
</div>

<div class="form-group">
    {!! Form::label('Conteúdo') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control','placeholder'=>'Digite o conteúdo']) !!}
</div>