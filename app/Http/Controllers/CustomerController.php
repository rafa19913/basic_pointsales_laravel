<?php

namespace App\Http\Controllers;

use App\Customer;
use Redirect;
use Illuminate\Http\Request;



class CustomerController extends Controller{
    
    public function index(){
        return view('template.customers',[
            'customers' => Customer::paginate(6)
        ]);
    }

    /*
        Firstly validate the first and last name's 
        those camps it must be obligatory AFTER of this -> create the new customer and redirect to route 'clients'
    */
    public function store(){

        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        
        if (request('route_photo') == null ){
            $route_photo = "/img/profile_default.png";
        }else{
            $route_photo =  "/img/" . request('route_photo');
            
            //$image = request('file');
            //$image->move(public_path('img'),request('route_photo'));
        }

        Customer::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'route_photo' => $route_photo
        ]);

        return redirect()->route('clientes');

    }

    
      /*

      */
      public function edit() {
      
        $customer = Customer::find(request('id'))->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'route_photo' => request('route_photo')
        ]);
        return redirect()->route('clientes');

      }


      public function delete(){
            $customer = Customer::find(request('id'))->delete();
            return redirect()->route('clientes');

      }
  

      
}


