@extends('layouts.admin')
@section('content')

    <section class="container my-5" id="create">
    <h1 class="mb-4">Create Products</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="form-crud">
                    @csrf
                    <div class="mb-3">
                        {{-- Nome Prodotto --}}
                        <label for="name" class="form-label">Name <span>*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required maxlength="100" minlength="3">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Prezzo Prodotto --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo <span>*</span></label>
                        <input type="number" step="0.01" name="price" id="price" class="form-control  @error('price') is-invalid @enderror" required max="100" min="0">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Disponibilità Prodotto --}}
                    <div class="mb-3">
                        <label for="available" class="form-label">Disponibilità <span>*</span></label>
                        <input type="radio" name="available" value="1" checked>
                        <span class="text-capitalize">si</span>
                        <input type="radio" name="available" value="0" >
                        <span class="text-capitalize">no</span>
                        @error('available')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Ingredienti Prodotto --}}
                    <div class="mb-3">
                        <label for="ingredient" class="form-label">Ingredienti</label>
                        <textarea class="form-control" id="ingredient" name="ingredient"></textarea>
                    </div>
                    {{-- Immagine Prodotto --}}
                    <div class="mb-4">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" id="create_cover_image" class="form-control  @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </section>
@endsection
