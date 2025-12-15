@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="app-content-header mb-3">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0">Enregistrer un produit</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produits</a></li>
                        <li class="breadcrumb-item active">Ajouter</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card card-warning card-outline mb-4">
            <!--begin::Header-->
            
            <div class="card-header">
                <h5 class="card-title mb-0">Formulaire d'ajout d'un produit</h5>
            </div>
            <!--end::Header-->
            @if (session('success'))
                 <div class='alert alert-danger'>
                    {{session('success')}}
                 </div>   
            @endif 

            <!--begin::Form-->
            <form action="{{route('etudiant.store')}}" method="POST">
    @csrf
    <div class="card-body">
        <div class="row mb-3">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="nom" name="nom"/>
            </div>
            @error('nom')
                <small style="color:brown">{{ $message }}</small>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="prenom" name="prenom" />
            </div>
            @error('prenom')
                <small style="color:blue">{{ $message }}</small>
            @enderror
        </div>

        <div class="row mb-3">
            <label for="date_naissance" class="col-sm-2 col-form-label">Date de naissance</label>
            <div class="col-sm-7">
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" />
            </div>
            @error('date_naissance')
                <small style="color:pink">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-secondary">Enregistrer</button>
        <a href="{{route('products.index')}}" class="btn float-end">Revenir sur la liste</a>
    </div>
</form>

            <!--end::Form-->
        </div>
    </div>
@endsection
