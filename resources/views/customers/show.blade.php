  <!-- Edit customer Modal-->
  <div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCustomerModal">Editar cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

        <form method="POST" action="{{url('template/categorias')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input name="name" type="text" class="form-control" placeholder="Nombres..." required value="{{$customer->first_name}}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellídos</label>
                  <input name="name" type="text" class="form-control" placeholder="Apellidos..." required value="{{$customer->last_name}}" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input name="name" type="text" class="form-control" placeholder="Teléfono..." required value="{{$customer->phone}}">
                  </div>
        
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto de perfil</label>
                    <input name="name" type="file" class="form-control" placeholder="Imagen..." required >
                  </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="{{url('/')}}">Aceptar</a>

        </form>

        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = function() {
        $('#editCustomerModal').modal('show');
    };
  </script>
@extends('layout.layout-template')

@section('content')

  @section('title')
    Clientes
  @endsection

  <!-- Begin Page Content -->
  <div class="container-fluid">

    @section('title-page')
        Clientes

    @endsection


    <style>
        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }
        .frontside .card .card-title,
        .backside .card .card-title {
            color: #312dfa !important;
        }
        .frontside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }
    </style>



  <!-- Team -->
  
    <div class="container">

 
            
        <div class="row">
            <!-- Team member -->
            @foreach ($customers as $customer)
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" >
                  <div class="mainflip flip-0">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="/img/profile_default.png" alt="card image"></p>
                                    <h4 class="card-title">{{$customer->first_name}} {{$customer->last_name}}</h4>
                                    <p class="card-text">Teléfono:
                                        @if ($customer->phone == null)
                                            -
                                        @else
                                            {{$customer->phone}}
                                        @endif 


                                    </p>
                                    
                                    <a href="{{route('customer.show',$customer)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ./Team member -->
          @endforeach
      
        </div>
        {{$customers->links()}}
    </div>

    
  <!-- Team -->



  
  
  <!-- /.container-fluid -->
@endsection
