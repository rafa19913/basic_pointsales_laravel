  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Está seguro de cerrar sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona el botón "Salir" si desea salir por favor.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="{{url('/')}}">Salir</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Add customer Modal-->
  <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCategorieModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro de cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       
        {{-- <form method="POST" enctype="multipart/form-data"> --}}
            @csrf
      

            <div class="form-group">
                <label for="exampleInputEmail1">Nombres</label>
                <input name="first_name" id="newfirst_name" type="text" class="form-control" placeholder="Nombres..." >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Apellídos</label>
                <input name="last_name" id="newlast_name" type="text" class="form-control" placeholder="Apellídos..." >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Teléfono</label>
                <input name="phone" id="newphone" type="text" class="form-control" placeholder="Teléfono...">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Foto de perfil</label>
                <input name="route_photo" id="newroute_photo" type="file" class="form-control" placeholder="Foto de perfil...">
            </div>

 

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" onclick="addNewCustomer();" >Agregar</a>

        {{-- </form>
         --}}
        </div>
      </div>
    </div>
  </div>

  

  <!-- edit customer Modal-->
  <div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
        {{-- <form method="POST" action="{{route('customer.update')}}"> --}}
            {{-- @csrf @method('PATCH') --}}
      
            @csrf
            <div class="form-group">
              <input name="id" id="id" type="text" class="form-control" placeholder="ID..." required disabled hidden>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nombres</label>
                <input name="first_name" id="first_name" type="text" class="form-control" placeholder="Nombres..." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Apellídos</label>
                <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Apellídos..." required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Teléfono</label>
                <input name="phone" id="phone" type="text" class="form-control" placeholder="Teléfono...">
            </div>
          
        

            <div class="form-group">
                <label for="exampleInputEmail1">Foto de perfil</label>
                <input name="route_photo" id="route_photo" type="file" class="form-control" placeholder="Categoria...">
            </div>

 

        </div>
  
  
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" onClick="editCustomerSelected();" >Aceptar</a>
        </div>

      </div>
    </div>
  </div>

  <!-- Delete customer Modal-->
  <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <input id="idDelete" type="hidden" disabled>

          <div class="flex" style="display: flex" >

            <label id="" for="exampleInputEmail1">¿Está seguro de eliminar al cliente: </label>
            <label id="nameComplete" for="exampleInputEmail1"></label>

          </div>
     

              
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" onClick="deleteCustomerSelected();" style="color: white;" >Aceptar</a>
        </div>
      </div>
    </div>
  </div>


  
  <!-- Add product Modal-->
  <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro de producto</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          ...

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="{{url('/')}}">Agregar</a>
        </div>
      </div>
    </div>
  </div>

  
  

  
  <!-- Add categorie Modal-->
  <div class="modal fade" id="addCategorieModal" tabindex="-1" role="dialog" aria-labelledby="addCategorieModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro de categoría</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
       
          
        <form method="POST" action="{{route('categorie.store')}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre de la categoría</label>
              <input name="name" type="text" class="form-control" placeholder="Categoria..." required>
            </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary">Agregar</a>

        </form>
        
        </div>
      </div>
    </div>
  </div>

  