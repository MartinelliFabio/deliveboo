@extends('layouts.admin')
@section('content')

    <section class="container my-5">
    <h1 class="mb-4">Edit Product: {{$product->name}}</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{ route('admin.products.update', $product->slug) }}" method="POST" enctype="multipart/form-data" class="form-crud">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        {{-- Nome Prodotto --}}
                        <label for="name" class="form-label">Name <span>*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $product->name)}}" required maxlength="100" minlength="3">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Prezzo Prodotto --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo <span>*</span></label>
                        <input type="number" step="0.01" name="price" id="price" class="form-control  @error('price') is-invalid @enderror" value="{{old('price', $product->price)}}" required max="100" min="0">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Disponibilità Prodotto --}}
                    <div class="mb-3">
                        <label for="available" class="form-label">Disponibilità <span>*</span></label>
                        <input type="radio" name="available" value="1" {{old('available', $product->available) == 1 ? 'checked' : ''}}>
                        <span class="text-capitalize">si</span>
                        <input type="radio" name="available" value="0" {{old('available', $product->available) == 0 ? 'checked' : ''}}>
                        <span class="text-capitalize">no</span>
                        @error('available')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Ingredienti Prodotto --}}
                    <div class="mb-3">
                        <label for="ingredient" class="form-label">Ingredienti</label>
                        <textarea class="form-control" id="ingredient" name="ingredient">{{old('ingredient', $product->ingredient)}}</textarea>
                    </div>
                    {{-- Immagine Prodotto --}}
                    <div class="d-flex mb-5 align-items-center">
                        <div class="media me-4">
                        @if($product->image)
                            <img class="shadow" width="150" src="{{asset('storage/' . $product->image)}}" alt="{{$product->image}}">
                            @else
                            <img class="shadow" width="150" src="https://dummyimage.com/200x200/000/fff" alt="C/O https://dummyimage.com/">
                        @endif
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Immagine</label>
                            <input type="file" name="image" id="image" class="form-control  @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </section>
@endsection
