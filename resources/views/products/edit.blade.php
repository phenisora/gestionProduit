@extends('layouts.base') 

@section('content')
    <div class="app-content-header">
        <div class="row">
            <div class="container-fluid">
                <h3 class="mb-0">Modification d'un produit</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produits</a></li>
                    <li class="breadcrumb-item active">modifier</li>
                </ol>
            </div>
        </div>
        <div class="col-md-8 offset-md-2">
            <div class="card card-secondary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Formulaire de modification d'un produit</div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('products.update', $product->id ) }}" method="POST">
                    @csrf
                    @method('PUT') 
                    
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Nom du produit</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ old('name', $product->name) }}" name="name" class="form-control" id="name" required />
                            </div>
                            @error('name')
                            <div style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description" rows="3">{{ old('description', $product->description) }}</textarea>
                            </div>
                            @error('description')
                            <div style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-3 col-form-label">Prix</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ old('price', $product->price) }}" name="price" step="0.01" class="form-control" id="price" required />
                            </div>
                            @error('price')
                            <div style="color:red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-sm-3 col-form-label">Quantité</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ old('quantity', $product->quantity) }}" name="quantity" class="form-control" id="quantity" required />
                            </div>
                            @error('quantity')
                            <div style="color:red">{{ $message }}</div>
                            @enderror
                       </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary">Mettre à jour le produit</button>
                        <a href="{{ route('products.index') }}" class="btn float-end">Revenir sur la liste des produits</a>
                    </div>
                </form>
                </div>
        </div>
    </div>
@endsection