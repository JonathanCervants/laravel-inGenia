@extends('layout')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Editar ticket</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form method="post">
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            </div>
                    @endif
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group row">
                            <label for="title" class="col-xs-12 col-lg-1  control-label">Titulo</label>
                           
                                <input type="text" class="form-control col-xs-12 col-lg-5" id="title" placeholder="Title" name="titulo" value="{{ $ticket->title }}">
                        
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-2 control-label">Contenido</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="content" name="contenido">{{ $ticket->content }}</textarea>
                                <span class="help-block">Estamos para apoyarte.</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="estado" name="status"  {{$ticket->status=='1'?'checked':'unchecked'}} >Atendido
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection