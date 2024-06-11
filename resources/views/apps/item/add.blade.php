@extends('layouts.app')
@section('content')
    <section class="hero-banner fit-screen">
        <div class="row container">
            <div class="row mb-0 mt-4 head-title">
                <div class="col-lg-9 col-xl-10">
                    <h3 class="mb-3">{{ $titlePage }}</h3>
                </div>
            </div>
            <hr>
            <style>
                .bg-pink {
                    background-color: #c0dede;
                }
                .bg-blue {
                    background-color: #b4e9e9;
                }
            </style>
            <div class="p-5 bg-pink">
                <div class="mb-3 text-center ">
                    <i class="bi bi-file-earmark-plus-fill fs-1"></i>
                </div>
            <div class="card rounded width-card margin-card bg-blue">
                <div class="card-body">
                    <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <label for="code-item" class="form-label">Kode Resep</label>
                                    <input type="text" class="form-control @error('code_item') is-invalid @enderror" id="code" name="code_item" placeholder="Masukkan Kode Resep" value="{{ old('code_item') }}" required>
                                    @error('code_item')
                                        <div id="code-item" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="name-item" class="form-label">Nama Resep</label>
                                    <input type="text" class="form-control @error('name_item') is-invalid @enderror" id="name-item" name="name_item" placeholder="Masukkan Nama Resep" value="{{ old('name_item') }}" required>
                                    @error('name_item')
                                        <div id="name-item" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="desc-item" class="form-label">Deskripsi Resep</label>
                                    <textarea class="form-control @error('desc_item') is-invalid @enderror" id="desc-item" name="desc_item" placeholder="Masukkan Deskripsi Resep" style="height: 150px" required>{{ old('desc_item') }}</textarea>
                                    @error('desc_item')
                                        <div id="desc-item" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="price-item" class="form-label">Estimasi Pembuatan</label>
                                    <input type="number" class="form-control @error('price_item') is-invalid @enderror" id="price-item" name="price_item" placeholder="Masukkan Estimasi Pembuatan" value="{{ old('price_item') }}" required>
                                    @error('price_item')
                                        <div id="price-item" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="image-item" class="form-label">Gambar Resep</label>
                                    <input type="file" class="form-control @error('image_item') is-invalid @enderror" id="image-item" name="image_item" required>
                                    @error('image_item')
                                        <div id="image-item" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="btn-action mt-4">
                                <a href="{{ route('item.index') }}" type="button" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('js-libraries')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @vite('resources/js/simple.money.format.js')
@endpush
@push('js')
    <script>
        $(document).ready(function() {
            $('#unit_item').select2();
        });
    </script>
@endpush
