@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            @include('partials.admin.alert-login')
        </div>
    </div>

    {{-- @if ($shopkeeper) --}}
    {{-- <h1>Create Shop:</h1>
    <div class="row bg-white">
        <div class="col-6">
                <form action="{{route('admin.shopkeepers.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf --}}
                    {{-- NOME --}}
                    {{-- <div class="mb-3">
                        <label for="name" class="form-label">Name Shop</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    {{-- P Iva --}}
                    {{-- <div class="mb-3">
                        <label for="p_iva" class="form-label">Partita Iva Shop</label>
                        <input type="text" class="form-control @error('p_iva') is-invalid @enderror" id="p_iva" name="p_iva">
                        @error('p_iva')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    {{-- IMMAGINE --}}
                    {{-- <div class="mb-3">
                        <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                        <label for="create_cover_image" class="form-label">Immagine Shop</label>
                        <input type="file" name="cover_image" id="create_cover_image" class="form-control  @error('cover_image') is-invalid @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    {{-- INDIRIZZO --}}
                    {{-- <div class="mb-3">
                        <label for="address" class="form-label">Indirizzo Shop</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    {{-- ORARIO --}}
                    {{-- <div class="mb-3">
                        <label for="hours" class="form-label">Orario Shop</label>
                        <input type="text" class="form-control @error('hours') is-invalid @enderror" id="hours" name="hours">
                        @error('hours')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- @endif --}}

</div>

@endsection
