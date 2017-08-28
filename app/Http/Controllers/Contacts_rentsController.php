<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contactos_rentas;
use Illuminate\Support\Facades\Redirect;
use App\Http\Request\Contacts_rentsFormRequest;
use DB;

class Contacts_rentsController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){

    	if($request){

    		$query=trim($request->get('searchText'));
    		$contactos=DB::table('contactos_rentas')->where('nombre','LIKE','%'.$query.'%')
    		->orderBy('nombre','desc')
    		->paginate(10);

    		return view('Maintenance/Contacts_rents.index',["contactos"=>$contactos,"searchText"=>$query]);
    	}


    }

    public function create(){

    	return view("Maintenance/Contacts_rents.create");
    	
    }

    public function store(Contacts_rentsFormRequest $request){

    	$contacts_rents=new Contactos_rentas;
    	$contacts_rents->nombre=$request->get('nombre');
    	$contacts_rents->apellido=$request->get('apellido');
    	$contacts_rents->telefono=$request->get('telefono');
    	$contacts_rents->detalle=$request->get('detalle');
    	$contacts_rents->save();
    	return Redirect::to('Maintenance/Contacts_rents');
    	
    }

    public function show($id){

    	return view("Maintenance/Contacts_rents.show",["contacts_rents"=>Contactos_rentas::indOrFail($id)]);
    }

    public function edit($id){

    	return view("Maintenance/Contacts_rents.edit",["contacts_rents"=>Contacts_rents::indOrFail($id)]);
    	
    }

    public function update(Contacts_rentsFormRequest $request,$id){

    	$contacts_rents=Contactos_rentas::findOrfail($id);
    	$contacts_rents->nombre=$request->get('nombre');
    	$contacts_rents->apellido=$request->get('apellido');
    	$contacts_rents->telefono=$request->get('telefono');
    	$contacts_rents->detalle=$request->get('detalle');
    	$contacts_rents->update();
    	return Redirect::to('Maintenance/Contacts_rents');

    	
    }

    public function destroy($id){

    	$contacts_rents=Contactos_rentas::findOrfail($id);
    	$contacts_rents->delete();
    	return Redirect::to('Maintenance/Contacts_rents');


    	
    }

}
