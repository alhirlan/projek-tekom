@extends('dashboards.users.layouts.user-dash-layout')
@section('title','Dashboard')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('uploadFile') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Nama Kegiatan" name="kegiatan">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Kegiatan</label>
                    <input type="date" class="form-control" name="tanggal">
                  </div>
                  <div class="form-group">
                    <label>Upload Proposal</label>
                    <select class="custom-select form-control-border border-width-2" name="id_ormawa">
                      <option>RKAT</option>
                      <option>Non-RKAT</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file_upload" class="input-group-text form-control">
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection