@extends('layout')
@section('content')

<div class="container col-md-9 col-md-offset-1 mt-5">
    <div class="card left">
        <div class="card-header">
            <h5 class="float-left">Listado de Tickets</h5>
            <div class="clearfix"></div>
            <a href="{{route('ticket.registro')}}">
                <button type="button" class="btn btn-success">Registrar</button>        
            </a>            
        </div>
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="card-body mt-2">
        @if ($tickets->isEmpty())
        <p>No hay tickets.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{$ticket->id}}</td>    
                            <td><a href="{{route('ticket.show', $ticket->id != null?$ticket->id:'1')}}">{{$ticket->title}}</a></td>    
                            <td>{{$ticket->status ? 'Pendiente':'Respondido'}}</td>    
                        </tr>  
                    @endforeach  
                </tbody>
            </table>   
        @endif
        </div>
    </div>
</div>
@endsection