@extends('layouts.admin')
@section('content')

    <section class="container my-5" id="create">
    <h1 class="mb-4">Inserisci il tuo Ristorante</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{ route('admin.shopkeepers.store') }}" method="POST" enctype="multipart/form-data" class="form-crud">
                    @csrf
                    <div class="mb-3">
                        {{-- Nome Ristorante --}}
                        <label for="name" class="form-label">Nome <span>*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required maxlength="100" minlength="3">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- P.IVA Ristorante --}}
                    <div class="mb-3">
                        <label for="p_iva" class="form-label">P.IVA <span>*</span></label>
                        <input type="text" name="p_iva" id="p_iva" class="form-control  @error('p_iva') is-invalid @enderror" required maxlength="11" minlength="3">
                        @error('p_iva')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Indirizzo Ristorante --}}
                    <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo <span>*</span></label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    {{-- Orario Ristorante --}}
                    <div class="mb-3">
                        <label for="hour" class="form-label">Orario <span>*</span></label>
                        <input type="text" class="form-control" id="hour" name="hour" required>
                    </div>
                    {{-- Immagine Ristorante --}}
                    <div class="mb-4">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" id="create_cover_image" class="form-control  @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-btn">Invia</button>
                    <button type="reset" class="btn btn-danger">Resetta</button>
                </form>
            </div>
        </div>
    </section>
@endsection
