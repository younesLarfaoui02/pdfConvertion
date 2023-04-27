@extends('admin.layouts.app')

@section('content')

<?php $pageper='per'?>
<div class="pagetitle">
    <h1>Employés</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
        <li class="breadcrumb-item active">liste des Employés</li>
        </ol>
    </nav>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

@if (session('status'))
    
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif  
@if (session('delete'))
    
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
@endif  
@if (session('update'))
    
    <div class="alert alert-warning">
        {{ session('updated') }}
    </div>
@endif  

<section class="section">
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <!--<h5 class="card-title">Liste des clients <span>| Today</span></h5>-->
              <a href="{{ route('employees.create') }}"><button type="button" class="btn btn-primary mt-3 mb-2"><i class="bi bi-person-plus-fill"></i> employé</button></a>
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <!--<th scope="col">#</th>-->
                    <th>employé</th>
                    <th>Telephone</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>options</th>
                  </tr>
                </thead>
                  <tbody>
                    @foreach ($employees as $employee)
                    <td>{{$employee->nom}}</td>
                    <td>{{$employee->tel}}</td>
                    <td>{{$employee->fix}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->adresse}}</td>
                        <td class="d-flex justify-content-around ">
                          <a href="{{route('employees.edit',$employee->id)}}" title="modifier" class="btn btn-xs btn-outline btn-success add-tooltip">
                                          <i class="bi bi-pencil-fill"></i>
                          </a>
                          <form method="POST" action="{{route('employees.destroy',$employee->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Supprimer" class="btn btn-xs btn-outline btn-danger add-tooltip">
                                          <i class="bi bi-trash-fill"></i>
                            </button>
                          </form>
                          </td>
                    @endforeach
                  </tbody>
               
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->
    </div>
</section>

@endsection