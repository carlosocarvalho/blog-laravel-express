@extends('tpl')

@section('content')

<div class="row">
    <div class="col-sm-8">
        <h2>Olá estamos na pagina inicial do blog</h2>
    </div>
    <div class="col-sm-4">
  <div class="panel panel-default">
      <div class="panel-heading">O que você procura ? </div>
      <div class="panel-body">
          <form action="">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Pesquisa aqui">
              </div>
          </form>

      </div>
  </div>


    </div>
</div>

@stop