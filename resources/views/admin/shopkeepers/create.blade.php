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
                    {{-- Tipo Ristorante --}}
                    <div class="mb-3 row">
                        <label for="types" class="form-label">Tipo di ristorante <span>*</span></label>
                        <br>
                            @foreach ($types as $type)
                                <div class="col-6 col-md-4 col-lg-3 col-xxl-2">
                                    <input type="checkbox" name="types[]" value="{{ $type->id }}">
                                    <span class="text-capitalize">{{ $type->name }}</span>
                                </div>
                            @endforeach
                        </select>
                    </div>
                    {{-- Orario Ristorante --}}
                    <div class="mb-3 d-flex">
                        <div class="me-3">
                            <label for="hour_open" class="form-label">Orario Apertura <span>*</span></label>
                            <input type="time" class="form-control @error('hour_open') is-valid @enderror" id="hour_open" name="hour_open" min="11:00" max="23:00" required>
                            @error('hour_open')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small>Orario apertura dalle 11:00</small>
                        </div>

                        <div class="mx-3">
                            <label for="hour_close" class="form-label">Orario Chiusura <span>*</span></label>
                            <input type="time" class="form-control @error('hour_close') is-valid @enderror" id="hour_close" name="hour_close" min="11:00" max="23:00" required>
                            @error('hour_close')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small>Orario chiusura alle 23:00</small>
                        </div>
                    </div>
                    {{-- Immagine Ristorante --}}
                    <div class="mb-4">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" id="create_cover_image" class="form-control  @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 obbligatorio">
                        <span>*</span> <p class="d-inline">i campi sono obbligatori</p>
                    </div>
                    <button type="submit" class="btn btn-primary my-btn">Invia</button>
                    <button type="reset" class="btn btn-danger">Resetta</button>
                </form>
            </div>
        </div>
    </section>
@endsection
