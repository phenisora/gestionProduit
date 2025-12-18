
@extends('layouts.base')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <div class="container-fluid">

        </div>
    </div>
    <!--end::App Content Header-->

    <!-- Include Sidebar>

                <!-- Main Content -->
                <main class="app-main">
                    <div class="container-fluid">
                        <h3 class="mb-0">Liste des produits</h3>
                        {{-- Ajoutez votre contenu principal ici --}}
                    </div>
                </main>
                {{-- filepath: c:\xampp\htdocs\school-app\resources\views\professeur\index.blade.php --}}
            <main class="app-main">
                <div class="container-fluid">

                    <div class="card mt-4" style="background-color: #f8f9fa;"> <!-- Ajout d'une couleur de fond -->
                        <div class="card-header">
                            <a href="{{ route('products.create') }}" class="btn btn-primary">
                                Ajouter produit
                            </a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                            <div class='alert alert-danger'>
                               {{session('success')}}
                            </div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $product)

                                    <tr class="align-middle">
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->quantity}}</td>

                                        <td>
                                            <a href="products.edit" class="btn btn-warning btn-sm">Modifier</a>

                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal{{$product->id}}">
                                                Supprimer
                                              </button>

                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de suppression</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Etes vous sur de vouloir supprimer le professeur
                                        <b>{{$product->name}}</b>?

                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <form action="#" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn btn"> Confirmer</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
  </div>
                                    @empty

                                    @endforelse

                            </table>
                        </div>
                    </div>
                </div>
            </main>

                <!-- Include Footer -->

            @endsection
