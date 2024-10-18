@extends('layouts.admin.main')
@section('title', 'Admin Edit Distributor')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.distributor') }}">Distributor</a></div>
                <div class="breadcrumb-item">Edit Distributor</div>
            </div>
        </div>
        <a href="{{ route('admin.distributor') }}" class="btn btn-icon icon-left btn-warning">Kembali</a>

        <div class="card mt-4">
            <form action="{{ route('distributor.update', $distributor->id) }}" class="needs-validation" novalidate=""
                method="POST">
                @csrf
                @method('PUT')
                <!-- Tambahkan method PUT untuk pembaruan -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Nama Distributor</label>
                                <input id="name" type="text" class="form-control" name="name" required=""
                                    value="{{ $distributor->name }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input id="kota" type="text" class="form-control" name="kota" required=""
                                    value="{{ $distributor->kota }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input id="provinsi" type="text" class="form-control" name="provinsi" required=""
                                    value="{{ $distributor->provinsi }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input id="kontak" type="text" class="form-control" name="kontak" required=""
                                    value="{{ $distributor->kontak }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required=""
                                    value="{{ $distributor->email }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection