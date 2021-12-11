@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Details | View')

@section('content')

@php
    //dd($view);
@endphp

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $view->nama_kegiatan }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal Upload</label>
                        <div class="col-sm-8">
                            {{ $view->created_at }}<br/>
                            <small>Oleh: {{ $view->pengirim }}</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Permintaan</label>
                        <div class="col-sm-8 text-center">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                            <small class="text-muted">1 / 1</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Harus Berurutan?</label>
                        <div class="col-sm-8">
                            Tidak
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <object type="application/pdf" style="height: 400px; width: 100%;" data="{{ url('/users/file/'.$view->status) }}">
                    <p>Tidak dapat menampilkan preview. Klik <a href="{{ url('/users/file/'.$view->status) }}">di sini</a> untuk mengunduh.</p>
                </object>
            </div>

            <h5 class="mt-4">Daftar Penanda Tangan</h5>
            <table class="table" id="signer-table">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Persetujuan</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        {{ $view->pengirim }}
                        </td>
                        <td>
                                <span class="badge bg-success">setuju</span>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>

@endsection