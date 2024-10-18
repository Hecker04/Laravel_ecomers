@extends('layouts.admin.main')
@section('title', 'Admin Detail Distributor')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail flashsale</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.flashsale') }}">Distributor</a></div>
                <div class="breadcrumb-item">Detail flashsale</div>
            </div>
        </div>

        <a href="{{ route('admin.flashsale') }}" class="btn btn-icon icon-left btn-warning"><i
                class="fas fa-arrow-left"></i> Kembali</a>

        <div class="row mt-4">
            <div class="col-12 col-md-8 col-lg-6 m-auto">
                <article class="article">
                    <div class="article-details">
                        <div class="row mt-4">
                            <div class="col-12 col-md-4 col-lg-12 m-auto">
                                <article class="article article-style-c">
                                    <div class="article-header">
                                        <div class="article-image"
                                            data-background="{{ asset('images/' . $flashsale->image) }}">
                                        </div>
                                    </div>
                                    <p><strong>Nmma Produk:</strong> {{ $flashsale->product_name }}</p>
                                    <p><strong>Harga Asli:</strong> {{ $flashsale->original_price }}</p>
                                    <p><strong>Harga Diskon:</strong> {{ $flashsale->discount_price }}</p>
                                    <p><strong>Tanggal Mulai:</strong>{{ $flashsale->start_time }}</p>
                                    <p><strong>Tanggal Berakhir:</strong> {{ $flashsale->end_time }}</p>
                                    <p><strong>stock:</strong> {{ $flashsale->stock }}</p>

                            </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection