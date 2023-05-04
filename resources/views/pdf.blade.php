<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <div class="pagetitle">
        <h1>Fournisseur Numero : {{$show->id}}</h1>

    </div>
    <div class="row">
        <div class="col">
            <span><strong>Name: </strong></span>
            <span>{{$show->nom}}</span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <span><strong>Telephone: </strong></span>
            <span>{{$show->tel}}</span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <span><strong>Fax: </strong></span>
            <span>{{$show->fax}}</span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <span><strong>Email: </strong></span>
            <span>{{$show->email}}</span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <span><strong>Adresse: </strong></span>
            <span>{{$show->adresse}}</span>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <span><strong>Ville: </strong></span>
            <span>{{$show->ville}}</span>
        </div>
    </div>
</body>

</html>
