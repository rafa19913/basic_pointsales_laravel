const { first } = require("lodash");


function openModelEditCustomer(id,first_name,last_name,phone){          
    var idInput = document.getElementById('id');
    var first_nameInput = document.getElementById('first_name');
    var last_nameInput = document.getElementById('last_name');
    var phoneInput = document.getElementById('phone');
    //var route_photoInput = document.getElementById('route_photo');

    idInput.value = id;
    first_nameInput.value = first_name;
    last_nameInput.value = last_name;
    phoneInput.value = phone;
    //route_photoInput.value = route_photo;

    $('#editCustomerModal').modal('show');

}


function openModelDeleteCustomer(id, first_name, last_name){
    var idInputHidden = document.getElementById('idDelete');
    var namesLabel = document.getElementById('nameComplete');

    idInputHidden.value = id;
    namesLabel.innerHTML = first_name + " " + last_name + "?";

     $('#deleteCustomerModal').modal('show');

}

