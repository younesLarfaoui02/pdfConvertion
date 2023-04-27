@extends('admin.layouts.app')

@section('content')

    <?php $pageper = 'per'; ?>
    <div class="pagetitle">
        <h1>Nouvel employé</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">liste des employés</a></li>
                <li class="breadcrumb-item active">Nouvel employé</li>
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
                <form method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <!-- Custom Styled Validation -->

                            <h5 class="card-title">informations personnelles</h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Nom d'employé</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="nom" value="{{old('nom')}}"
                                        required placeholder="Nom d'employé">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="email" value="{{old('email')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4 pt-4">
                                    <label for="validationCustom02" class="form-label">sexe : </label>
                                    <input type="radio" name="sex" class="form-check-input" value="homme" {{ (old('sex') == 'homme')? 'checked' : ' ' }}
                                        id="radio1">
                                    <label class="form-check-label" for="radio1">
                                        Homme
                                    </label>
                                    <input type="radio" name="sex" class="form-check-input" value="femmme" 
                                        id="radio2">
                                    <label class="form-check-label" for="radio2" {{ (old('sex') == 'femme')? 'checked' : ' ' }}>
                                        femme
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">CIN</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="cin" value="{{old('cin')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">CNSS</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="cnss" value="{{old('cnss')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Statut matrimoniel</label>
                                    <select class="form-select" name="status_familiale" id="statut" value="{{old('status_familiale')}}">
                                        <option value="">-- --</option>
                                        <option value="célibataire">célibataire</option>
                                        <option value="marié">marié/mariée</option>
                                        <option value="veuve">veuf/veuve</option>
                                        <option value="divorcé">divorcé/divorcée</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Enfants</label>
                                    <input type="number" class="form-control" id="enfants" name="nb_enfants" value="{{old('nb_enfants')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Télephone</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="tel" value="{{old('tel')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">fix</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="fix" value="{{old('fix')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Adresse</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="adresse" value="{{old('adresse')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">ville</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="ville" value="{{old('ville')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Date naissance</label>
                                    <input type="date" class="form-control" id="validationCustom02" value="{{old('date_naissance')}}"
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
                                    <input type="text" class="form-control" id="validationCustom02" name="fonction" value="{{old('fonction')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Type de contrat</label>
                                    <select class="form-select" name="type_contrat" id="" value="{{old('type_contrat')}}" >
                                        <option value="">-- --</option>
                                        <option value="stage">stage</option>
                                        <option value="CDI">CDI</option>
                                        <option value="CDD  ">CDD</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Date d'entrée</label>
                                    <input type="date" class="form-control" id="validationCustom02" value="{{old('date_entree')}}"
                                        name="date_entree">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Date de sortie</label>
                                    <input type="date" class="form-control" id="validationCustom02"
                                        name="date_sortie" value="{{old('date_sortie')}}"  >
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Salaire de base</label>
                                    <input type="number" class="form-control" id="validationCustom02"
                                        name="base_salaire" value="{{old('base_salaire')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Cout heures sup</label>
                                    <input type="number" class="form-control" id="validationCustom02"
                                        name="heures_sup" value="{{old('heures_sup')}}">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Congé consommés</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        name="duree_cong" value="{{old('duree_cong')}}">
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
                                        placeholder="Nom du banque">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="validationCustom02" name="rib"
                                        placeholder="RIB">
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
                                        placeholder="Nom">
                                    <div class="invalid-feedback">
                                        champs obligatoire!
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="validationCustom02" name="tel_urg"
                                        placeholder="Téléphone">
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
