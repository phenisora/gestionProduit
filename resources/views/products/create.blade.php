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
            <form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="card-body">
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"/>
        </div>
        @error('name')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-7">
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        @error('description')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-7">
            <input type="float" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}"/>
        </div>
        @error('price')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>

    <div class="row mb-3">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-7">
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}"/>
        </div>
        @error('quantity')
            <small style="color:red">{{ $message }}</small>
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
