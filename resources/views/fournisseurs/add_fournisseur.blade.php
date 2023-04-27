@extends('admin.layouts.app')

@section('content')
<div id="success-message"></div>
    <div class="pagetitle">
        <h1>Ajouter fournisseur</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active">Ajouter fournisseur</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nouveau fournisseur</h5>
                        <hr>
                        <!-- Custom Styled Validation -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="post" action="{{route('fournisseurs.store')}}" class="row g-3 needs-validation" novalidate>
                            @csrf
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nom /Raison sociale</label>
                                <input type="text" class="form-control" id="validationCustom01" name="nom"  required placeholder="Nom Complet">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Téléphone</label>
                                
                                <input type="text" class="form-control" id="validationCustomUsername" name="tel" required placeholder="Téléphone">
                                <div class="invalid-feedback">
                                champs obligatoire!
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Fax</label>
                                <input type="text" class="form-control" id="validationCustom03" name="fax" placeholder="Fax">
                                <div class="invalid-feedback">
                                champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Email</label>
                                <input type="text" class="form-control" id="validationCustom04" name="email" placeholder="Email">
                                
                                <div class="invalid-feedback">
                                champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="validationCustom05" name="adresse" required placeholder="Adresse">
                                <div class="invalid-feedback">
                                champs obligatoire!
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="validationCustom02" name="ville" required placeholder="Ville">
                                <div class="invalid-feedback">
                                champs obligatoire!
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <button class="btn btn-success" name="submit" type="submit">Ajouter</button>
                        <a href="../fournisseur/list-fournisseur.php"><div class="btn btn-primary" value="">Retour</div></a>
                            </div>
                        </form><!-- End Custom Styled Validation -->

                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
