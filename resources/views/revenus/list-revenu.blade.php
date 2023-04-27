-@extends('admin.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Achats</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
        <li class="breadcrumb-item active">liste des achats</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">


            <div class="card-body">
              <a href="../revenu/add-revenu.php"><button type="button" class="btn btn-primary mt-3 mb-2"><i class="bi bi-plus-lg"></i> achat</button></a>


              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <!--<th scope="col">#</th>-->
                    <th>Date</th>
                    <th>Fournisseur</th>
                    <th>Facture</th>
                    <th>Montant total</th>
                    <th>Montant payer</th>
                    <th>Reste à payer</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>03-04-2023</td>
                    <td>societe nom 1</td>
                    <td>1200.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <a href="#" title="modifier" class="btn btn-xs btn-outline btn-success add-tooltip">
                                    <i class="bi bi-pencil-fill"></i>
                      </a>
                      <a href="#" title="Supprimer" class="btn btn-xs btn-outline btn-danger add-tooltip">
                                    <i class="bi bi-trash-fill"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    
                    <td>03-04-2023</td>
                    <td>societe nom 1</td>
                    <td>1200.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <a href="#" title="modifier" class="btn btn-xs btn-outline btn-success add-tooltip">
                                    <i class="bi bi-pencil-fill"></i>
                      </a>
                      <a href="#" title="Supprimer" class="btn btn-xs btn-outline btn-danger add-tooltip">
                                    <i class="bi bi-trash-fill"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->
</section>
@endsection
