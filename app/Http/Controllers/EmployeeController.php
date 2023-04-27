<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employee;
class EmployeeController extends Controller
{
    public function index(){
        $employees = \App\Models\Employee::all();
        return view ('employees.index',compact('employees'));
    }

    public function create(){
        return view ('employees.create');
    }

    public function edit($id){
        $employee = \App\Models\Employee::findOrFail($id);
        
        return view ('employees.edit',compact('employee'));
    }
    

    
    public function store(Request $request){
        $request->validate([
            'nom' => 'required',
            'email' => 'required|unique:employees',
            'sex' => 'required',
            'cin' => 'required',
            'cnss' => 'required',
            'status_familiale' => 'required',
            'tel' => 'required',
            'fix' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'date_naissance' => 'required',
            'fonction' => 'required',
            'type_contrat'=> 'required',
            'date_entree'=> 'required',
            'date_sortie'=> 'required',
            'base_salaire'=> 'required',
            'heures_sup'=> 'required',
            'duree_cong'=> 'required',
            'nom_banque'=> 'required',
            'rib'=> 'required',
            'nom_urg'=> 'required',
            'tel_urg'=> 'required',
        ],$request->all());
        \App\Models\Employee::create($request->all());
        return redirect()->route('employees.index')->with('status', 'Profile added!');
    }
    public function update(Request $request , $id){
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'sex' => 'required',
            'cin' => 'required',
            'cnss' => 'required',
            'status_familiale' => 'required',
            'nb_enfants' => 'required',
            'tel' => 'required',
            'fix' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'date_naissance' => 'required',
            'fonction' => 'required',
            'type_contrat'=> 'required',
            'date_entree'=> 'required',
            'date_sortie'=> 'required',
            'base_salaire'=> 'required',
            'heures_sup'=> 'required',
            'duree_cong'=> 'required',
            'nom_banque'=> 'required',
            'rib'=> 'required',
            'nom_urg'=> 'required',
            'tel_urg'=> 'required',
        ],$request->all());
        \App\Models\Employee::where('id',$id)->update($request->except(['_token','_method']));
        return redirect()->route('employees.index')->with('update', 'Profile updated!');
    }
    public function destroy($id){
        \App\Models\Employee::find($id)->delete();
        return redirect()->route('employees.index')->with('delete', 'Profile Deleted!');

    }
}
