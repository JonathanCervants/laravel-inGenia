<div class="modal-header">
    <div class="modal-title">
        <h5>Registrar Categoria</h5>   
    </div>  
    </div>            
    <div class="modal-body">
        <form action="{{route('categoria.registro')}}">
            <div class="form-group">
              <label for="email">Categoría</label>
              <input type="text" class="form-control" id="categoria">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
    </div>
</div>
        
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
 