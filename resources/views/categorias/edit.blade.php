@extends('layout')
@section('content')
<div class="modal-header">
    <div class="modal-title">
        <h5>Editar Categoria</h5>   
    </div>  
    </div>            
    <div class="modal-body">
       
        <form method="post" class="form">
          @csrf   @method('PUT')
          @foreach ($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
          @endforeach
            <div class="form-group">
              <label for="categoria">Categoría</label>
              <input type="text" class="form-control" name="categoria" id="categoria">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
    </div>
</div>
@endsection
{{-- <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
   
  </form> --}}
 