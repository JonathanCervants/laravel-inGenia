@extends('layout')
@section('content')

<div class="container col-md-6 col-md-offset-2 mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="float-left">{{$ticket->title}}</h5>
            <div class="clearfix"></div>    
        </div>
        <div class="card-body">
            <p><strong>Estado: </strong>{{$ticket->status == '0' ? 'Pendiente': 'Atendido'}}</p>
            <p>{{$ticket->content}}</p>
            <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="{{ route('ticket.edit', $ticket->id)}}" class="btn btn-info">Editar</a>
                {{-- <form method="post" action="{{ action('TicketsController@destroy', $ticket->slug)}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form> --}}
            <div class="clearfix"></div>
        </div>
    </div>
    {{-- @foreach($comentarios as $comentario)
        <div class="card mt-3">
            <div class="card-body">
                {{$comentario->contenido}}
            </div>
        </div>
    @endforeach --}}

    <div class="card mt-3">
        <form method="post" action="/comentario">
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="post_id" value="{{$ticket->id}}">
            <fieldset>
                <legend class="ml-3">Comentar</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                       <textarea name="contenido" id="contenido" cols="3" rows="3" class="form-control"></textarea> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection

