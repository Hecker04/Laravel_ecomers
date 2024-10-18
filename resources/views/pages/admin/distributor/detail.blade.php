@extends('layouts.admin.main')
@section('title', 'Admin Detail Distributor')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Distributor</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.distributor') }}">Distributor</a></div>
                <div class="breadcrumb-item">Detail Distributor</div>
            </div>
        </div>

        <a href="{{ route('admin.distributor') }}" class="btn btn-icon icon-left btn-warning"><i
                class="fas fa-arrow-left"></i> Kembali</a>

        <div class="row mt-4">
            <div class="col-12 col-md-8 col-lg-6 m-auto">
                <article class="article">
                    <div class="article-details">
                        <h2>{{ $distributor->name }}</h2>
                        <p><strong>Kota:</strong> {{ $distributor->kota }}</p>
                        <p><strong>Provinsi:</strong> {{ $distributor->provinsi }}</p>
                        <p><strong>Kontak:</strong> {{ $distributor->kontak }}</p>
                        <p><strong>Email:</strong> <a
                                href="mailto:{{ $distributor->email }}">{{ $distributor->email }}</a></p>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection