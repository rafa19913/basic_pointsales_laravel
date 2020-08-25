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



    <div class="container">

        <div class="row">
      
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
                                        {{-- When clicked -> send it the ID, FirstName, LastName and Phone CURRENT to openModelEditCustomer --}}
                                    <a href="#" class="btn btn-warning btn-sm" onClick="openModelEditCustomer({{$customer["id"]}}, '{{$customer["first_name"]}}','{{$customer["last_name"]}}','{{$customer["phone"]}}','{{$customer["route_photo"]}}')" ><i class="fa fa-edit"></i></a>
                                    
                                    <a href="#" class="btn btn-danger btn-sm" onClick="openModelDeleteCustomer({{$customer["id"]}}, '{{$customer["first_name"]}}','{{$customer["last_name"]}}')"  ><i class="fa fa-trash-alt"></i></a>
                                
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

    <script>

    function addNewCustomer(){

        

        $.ajax({
            url: '{{route("customer.store")}}',
            type: 'post',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#id").val(),
                'first_name': $('#newfirst_name').val(),
                'last_name': $('#newlast_name').val(),
                'phone': $('#newphone').val(),
                'route_photo' : $('#newroute_photo').val().split("\\").pop()
            },
            
            success: function(data){ // suposs when edit data was correct do V
              
              $('#addCustomerModal').modal('hide'); //close the modal  
              cleanModalAddCustomer();
              iziToast.success({
                  title: 'Aceptar',
                  message: 'Nuevo cliente agregado correctamente'
              });

              setTimeout( function () {
                  location.reload(); // reload the same url to see the changes
              }, 3000 );
              
          },
          error: function (data) {
              $('#addCustomerModal').modal('hide'); //close the modal  
              iziToast.error({
                  title: 'Error',
                  message: 'Hubo un problema al agregar el usuario'
              });

          }

        });

    }

     
    // After the user press "Guardar" in editCustomerModal will 
    //send the data to route editCustomer to edit the customer
    function editCustomerSelected(){
        var route_photo = document.getElementById('route_photo').value;
        route_photo = route_photo.split("\\").pop();
        route_photo = "/img/" + route_photo;
        alert(route_photo);

        alert(route_photo);

        $.ajax({
            type: 'post',
            url: '{{route("customer.edit")}}',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#id").val(),
                'first_name': $('#first_name').val(),
                'last_name': $('#last_name').val(),
                'phone': $('#phone').val(),
                'route_photo' : route_photo
            },
            success: function(data){ // suposs when edit data was correct do V
              
                $('#editCustomerModal').modal('hide'); //close the modal  

                iziToast.success({
                    title: 'Aceptar',
                    message: 'Nuevo cliente editado correctamente'
                });

                setTimeout( function () {
                    location.reload(); // reload the same url to see the changes
                }, 3000 );
                
            },
            error: function (data) {
                $('#editCustomerModal').modal('hide'); //close the modal  
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al editar el usuario'
                });

            }
        });

    }

    // After press "Aceptar" in deleteCustomerModal will delete the user
    function deleteCustomerSelected(){
        $.ajax({
            type: 'post',
            url: '{{route("customer.delete")}}',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#idDelete").val()
            },
            success: function(data){ // suposs when edit data was correct do V
              
              $('#deleteCustomerModal').modal('hide'); //close the modal  

              iziToast.success({
                  title: 'Aceptar',
                  message: 'Nuevo cliente eliminado correctamente'
              });

              setTimeout( function () {
                  location.reload(); // reload the same url to see the changes
              }, 3000 );
              
            },
            error: function (data) {
                $('#deleteCustomerModal').modal('hide'); //close the modal  
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al eliminar el usuario'
                });

            }
        });
        
    }



    function cleanModalAddCustomer(){
    var first_name = document.getElementById('newfirst_name').value= "";
    var last_name = document.getElementById('newlast_name').value= "";
    var phone = document.getElementById('newphone').value= "";
    var route = document.getElementById('newroute_photo').value = "";
    }


    </script>
 
    

  <!-- /.container-fluid -->
@endsection
