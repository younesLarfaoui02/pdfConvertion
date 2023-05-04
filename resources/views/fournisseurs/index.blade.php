@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Fournisseurs</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
        <li class="breadcrumb-item active">liste des fournisseurs</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <!--<div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>-->

            <div class="card-body">
            <a href="{{route('fournisseurs.create')}}"><button type="button" class="btn btn-primary mt-3 mb-2"><i class="bi bi-person-plus-fill"></i> fournisseur</button></a>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <!--<th scope="col">#</th>-->
                    <th>Fournisseur</th>
                    <th>Telephone</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>options</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($fournisseurs as $fournisseur)
                  <tr>
                    <td>{{$fournisseur['nom']}} {{$fournisseur['prenom']}}</td>
                    <td>{{$fournisseur['tel']}}</td>
                    <td>{{$fournisseur['fax']}}</td>
                    <td>{{$fournisseur['email']}}</td>
                    <td>{{$fournisseur['adresse']}}</td>
                    <td>{{$fournisseur['ville']}}</td>
                    <td>
                    <a href="{{route('fournisseurs.show',$fournisseur['id'])}}" title="modifier" class="btn btn-xs btn-outline btn-secondary add-tooltip">
                      <i class="bi bi-info-circle"></i>
                    </a>
                      <a href="#" title="modifier" class="btn btn-xs btn-outline btn-success add-tooltip">
                                    <i class="bi bi-pencil-fill"></i>
                      </a>
                      <a href="#" title="Supprimer" class="btn btn-xs btn-outline btn-danger add-tooltip">
                                    <i class="bi bi-trash-fill"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>

          </div>
    </div><!-- End Recent Sales -->
    
</section>
@endsection
