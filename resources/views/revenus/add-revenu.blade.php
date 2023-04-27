@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Ajout d'un nouvel achat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active">Ajouter achat</li>
            </ol>
        </nav>
    </div>
    <!--basic info-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body mt-3">
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Date</label>
                                <input type="date" class="form-control" id="validationCustom01" name="date-achat"
                                    required>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Fournisseur</label>
                                <select class="form-select" id="validationCustom01" required>
                                    <option value="" selected>--Fournisseurs--</option>
                                    @foreach ($fournisseurs as $fournisseur)
                                        <option value="{{ $fournisseur['id'] }}">{{ $fournisseur['nom'] }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Facture</label>
                                <input type="text" class="form-control" id="validationCustom02" required
                                    placeholder="Code Facture">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                        </form><!-- End Custom Styled Validation -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Choisir un produit-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Choisir un produit</h5>
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <select class="form-select" id="category-select" required>
                                    <option value="" selected>--Catégories--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['nom'] }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="produit-select" required>
                                    <option value="" selected>--Produits--</option>
                                    <option value=""></option>
                                </select>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                        </form><!-- End Custom Styled Validation -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Les informations du produit-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Les informations du produit</h5>
                        <div class="row">
                            <!-- Custom Styled Validation -->
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Libelle</label>
                                <input readonly type="text" class="form-control" id="libelle" required value="">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label">Qté</label>
                                <input type="number" class="form-control" id="qte" required value="">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label">Prix HT</label>
                                <input type="text" class="form-control" id="prix_ht" required value="">

                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label">Prix TTC</label>
                                <input type="text" class="form-control" id="prix_ttc" required value="">

                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Total HT</label>
                                <input type="text" class="form-control" id="total_ht" required value="">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-6 pb-3">
                                <label for="validationCustom02" class="form-label">Total TTC</label>
                                <input type="text" class="form-control" id="total_ttc" required value="">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success" type="submit" id="ajout">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Les lignes des achats-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Les lignes des achats</h5>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Libelle</th>
                                    <th>Qté</th>
                                    <th>Prix</th>
                                    <th>Total HT</th>
                                    <th>Total TTC</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Règlement-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Règlement</h5>
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Mode de règlement</label>
                                <select class="form-select" id="mode_reg" name="mode_reg" required >
                                    @foreach($mode_reglements as $mode_reglement)
                                    <option value="{{$mode_reglement->payment_method}}" >{{$mode_reglement->payment_method}}</option> 
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Avance</label>
                                <input type="number" class="form-control" id="avance"  name="avance" required
                                    placeholder="Fournisseur">
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label" >Reste</label>
                                <input type="text" id="reste" name="reste" class="form-control" id="validationCustom02" required
                                    placeholder="Facture" readonly>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    @foreach($status as $single_status)
                                        <option value="{{$single_status->status}}" >{{$single_status->status}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    champs obligatoire!
                                </div>
                            </div>


                        </form><!-- End Custom Styled Validation -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Validation d'achat-->
    <div class="row">
        <div class="col-10">
            <strong></strong>
        </div>
        <div class="col-2">
                <button class="btn btn-secondary" type="submit" id="validate">Valider l'achat</button>
            
        </div>
    </div>
    @include('revenus.javascript')
@endsection
