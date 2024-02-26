@extends('layout')
@section('content')
<div class="class">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Categorías</h2>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-xl-12">
                        <form action="{{route('categorias')}}" method="get">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                             @endif
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-xs-12">
                                    <div class="input-group mb-6">     
                                        <input type="text" class="form-control" name="texto" id="texto" placeholder="Buscar Categoria" maxlength="80">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3 col-xs-12">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
                                        Abrir Modal
                                    </button>
                                
                                    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <!-- Contenido del modal -->
                                                @include('categorias.create')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
            <div class="card-content">
                {{-- <div class="card-body">
                </div> --}}
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Categoría</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $cat)
                            <tr>
                                <td>
                                    <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-warning btn-sm"></a>
                                    <button>Editar</button>
                                </td>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->categoria}}</td>
                                <td>{{$cat->estado}}</td>
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection