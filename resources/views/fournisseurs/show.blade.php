@extends('admin.layouts.app')

@section('content')
    <div id="success-message"></div>
    <div class="pagetitle">
        <h1>Detail du fournisseur</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active">Fourisseur N-{{ $fournisseur->id }}</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">fournisseur N-{{ $fournisseur->id }}</h5>
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

                        <form method="get" action="{{ route('loadPdf',$fournisseur->id) }}" class="row g-3 needs-validation"
                            novalidate>
                        
                            <div class="col-md-4 text-align-center">
                                <label for="validationCustomUsername" class="form-label ">Nom</label>
                                <div class=" lead">{{$fournisseur->nom}}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Téléphone</label>
                                <div class=" lead">{{$fournisseur->nom}}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Fax</label>
                                <div class=" lead">{{$fournisseur->nom}}</div>

                            </div>
                        <hr />
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Email</label>
                                <div class=" lead">{{$fournisseur->nom}}</div>

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Adresse</label>
                                <div class=" lead">{{$fournisseur->nom}}</div>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Ville</label>
                                <div class=" lead">{{$fournisseur->nom}}</div>

                            </div>
                            <hr>
                            <div class="col-12">
                                <button class="btn btn-success" name="submit" type="submit">Print PDF</button>
                                <a href="../fournisseur/list-fournisseur.php">
                                    <div class="btn btn-primary" value="">Retour</div>
                                </a>
                            </div>
                        </form><!-- End Custom Styled Validation -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
