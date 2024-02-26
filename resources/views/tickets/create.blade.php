@extends('layout')
@section('content')

<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header">
            <h5 class="float-left">Crear un Ticket</h5>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <form method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-6 control-label">Título</label>    
                        <div class="col-lg-10">
                            <input type="text" maxlength="100" class="form-control" id="titulo" name="titulo" placeholder="Título">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-10 control-label">Contenido</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="contenido" name="contenido"></textarea>
                            <span class="help-block">Sienteté libre de escribirnos.</span>
                        </div>
                    </div>
                    <div class="form-group">    
                        <label for="title" class="col-lg-10 control-label">Solución</label>
                        <div class="col-lg-10">
                            <input type="text" maxlength="200" class="form-control col-lg-10" id="solucion" name="solucion" placeholder="¿Es definitiva?">
                        </div> 
                    </div>   
                    <div class="form-group">    
                        <label for="title" class="col-lg-10 control-label">Precio</label>    
                        <div class="col-lg-10">
                            <input type="text" maxlength="15"  pattern="[0-9]+(\.[0-9]+)?" class="form-control" id="precio" name="precio" placeholder="Ingrese solo números">
                        </div>
                    </div>                 
                    <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-warning">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection