

@extends('layout.layout-login')

@section('form-login')
<div class="centrar" style="margin: auto;">




    
<form>

    <div class="form-row">

      <div class="col-md-4 mb-3">
        <label for="validationServer01">Nombre de usuario</label>
        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="admin@gmail.com" disabled style="width: 300%">
      </div>
  
    </div>

    <div class="form-row">
    
        <div class="col-md-4 mb-3">
          <label for="validationServer01">Password</label>
          <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="adminadmin" disabled style="width: 300%">
        </div>
   
        
      </div>
  
    

</form>

</div>
@endsection
