@extends('admin.layouts.app')

@section('content')

<?php $pageper='per'?>
<div class="pagetitle">
    <h1>Informations d'employé</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">liste des employés</a></li>
        <li class="breadcrumb-item active">Informations d'employé</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('employees.update',$employee->id) }}">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">

                    <!-- Custom Styled Validation -->

                    <h5 class="card-title">informations personnelles</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nom d'employé</label>
                            <input type="text" class="form-control" id="validationCustom01" name="nom" value="{{old('nom', $employee->nom)}}"

                                required placeholder="Nom d'employé">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Email</label>
                            <input type="text" class="form-control" id="validationCustom02" name="email" value="{{ old('email', $employee->email) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <label for="validationCustom02" class="form-label">sexe : </label>
                            <input type="radio" name="sex" class="form-check-input" value="homme" {{ (old('sex') == 'homme' || $employee->sex == 'homme') ? 'checked' : '' }}
                                id="radio1">
                            <label class="form-check-label" for="radio1">
                                Homme
                            </label>
                            <input type="radio" name="sex" class="form-check-input" value="femme" 
                                id="radio2" {{ (old('sex') == 'homme' || $employee->sex == 'femme') ? 'checked' : '' }} >
                            <label class="form-check-label" for="radio2"  >
                                femme
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="validationCustom02" name="cin" value="{{ old('cin', $employee->cin) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">CNSS</label>
                            <input type="text" class="form-control" id="validationCustom02" name="cnss" value="{{ old('cnss', $employee->cnss) }}" >
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Statut matrimoniel</label>
                            <select class="form-select" name="status_familiale" id="statut" value="{{ old('status_familiale', $employee->status_familiale) }}">
                                <option value="">-- --</option>
                                <option value="célibataire" {{ $employee->status_familiale == 'célibataire' ? 'selected' : '' }}>célibataire</option>
                                <option value="marié" {{ $employee->status_familiale == 'marié' ? 'selected' : '' }}>marié/mariée</option>
                                <option value="veuve" {{ $employee->status_familiale == 'veuve' ? 'selected' : '' }}>veuf/veuve</option>
                                <option value="divorcé" {{ $employee->status_familiale == 'divorcé' ? 'selected' : '' }}>divorcé/divorcée</option>
                            </select>
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Enfants</label>
                            <input type="number" class="form-control" id="enfants" name="nb_enfants" value="{{ old('nb_enfants', $employee->nb_enfants) }}" >
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Télephone</label>
                            <input type="text" class="form-control" id="validationCustom02" name="tel" value="{{ old('tel', $employee->tel) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">fix</label>
                            <input type="text" class="form-control" id="validationCustom02" name="fix" value="{{ old('fix', $employee->fix) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="validationCustom02" name="adresse" value="{{ old('adresse', $employee->adresse) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">ville</label>
                            <input type="text" class="form-control" id="validationCustom02" name="ville" value="{{ old('ville', $employee->ville) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Date naissance</label>
                            <input type="date" class="form-control" id="validationCustom02" value="{{ old('date_naissance', $employee->date_naissance) }}"
                                name="date_naissance">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Poste</h5>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Fonction</label>
                            <input type="text" class="form-control" id="validationCustom02" name="fonction" value="{{ old('fonction', $employee->fonction) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Type de contrat</label>
                            <select class="form-select" name="type_contrat" id="" value="{{ old('type_contrat', $employee->type_contrat) }}" >
                                <option value="">-- --</option>
                                <option value="stage" {{ $employee->type_contrat == 'stage' ? 'selected' : '' }}>stage</option>
                                <option value="CDI" {{ $employee->type_contrat == 'CDI' ? 'selected' : '' }}>CDI</option>
                                <option value="CDD  " {{ $employee->type_contrat == 'CDD' ? 'selected' : '' }}>CDD</option>
                            </select>
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Date d'entrée</label>
                            <input type="date" class="form-control" id="validationCustom02" value="{{ old('date_entree', $employee->date_entree) }}"
                                name="date_entree">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Date de sortie</label>
                            <input type="date" class="form-control" id="validationCustom02"
                                name="date_sortie" value="{{ old('date_sortie', $employee->date_sortie) }}" >
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Salaire de base</label>
                            <input type="number" class="form-control" id="validationCustom02"
                                name="base_salaire" value="{{ old('base_salaire', $employee->base_salaire) }}" >
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Cout heures sup</label>
                            <input type="number" class="form-control" id="validationCustom02"
                                name="heures_sup" value="{{ old('heures_sup', $employee->heures_sup) }}" >
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Congé consommés</label>
                            <input type="text" class="form-control" id="validationCustom02"
                                name="duree_cong" value="{{ old('duree_cong', $employee->duree_cong) }}" >
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Banque</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="validationCustom02" name="nom_banque"
                                placeholder="Nom du banque" value="{{ old('nom_banque', $employee->nom_banque) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="validationCustom02" name="rib"
                                placeholder="RIB" value="{{ old('rib', $employee->rib) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact d'urgence</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="validationCustom02" name="nom_urg"
                                placeholder="Nom" value="{{ old('nom_urg', $employee->nom_urg) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="validationCustom02" name="tel_urg"
                                placeholder="Téléphone" value="{{ old('tel_urg', $employee->tel_urg) }}">
                            <div class="invalid-feedback">
                                champs obligatoire!
                            </div>
                        </div>

                    </div><!-- End Custom Styled Validation -->

                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">Ajouter</button>
                <a href="{{ route('employees.index') }}">
                    <div class="btn btn-primary" value="">Retour</div>
                </a>
            </div>
        </form>
            
        </div>
    </div>
</section>

@endsection