@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

<section class="content">

            @if (Session::has('sukses'))
                <div class="alert alert-success py-2">
                    <button type="button" class="exit btn btn-lg text-white float-right" data-dismiss="alert" aria-label="Close" style="margin-top: -10px;">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('sukses') }}
                </div>
            @endif

      <!-- Default box -->
      <div class="card mt-3">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        @php
            $nomor = 1;
        @endphp
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Nomor
                      </th>
                      <th style="width: 23%">
                          Nama Kegiatan
                      </th>
                      {{--<th style="width: 3%">
                          Team Members
                      </th>--}}
                      <th>
                          Revisi
                      </th>
                      <th style="width: 23%" class="text-center">
                          Status
                      </th>
                      <th style="width: 23%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @forelse($hasil as $laporan)
                    <tr>
                        <td>
                            {{ $nomor++; }}
                        </td>
                        <td>
                            <a>
                                {{ $laporan->nama_kegiatan }}
                            </a>
                            <br>
                            <small>
                                {{ $laporan->created_at }}
                            </small>
                        </td>
                        {{--<td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                </li>
                            </ul>
                        </td>--}}
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                </div>
                            </div>
                            <small>
                                <a href="{{ url('/users/file/'.$laporan->status) }}" target="_blank">link PDF</a>
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-danger">Success, Revisi</span>
                        </td>
                        <td class="project-actions text-right">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="btn btn-primary btn-sm" href="{{ route('main/view', ['uploadfile' => $laporan->id]) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        detail
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                </div>
                                <div class="col">
                                    <form action= "{{ route('main/delete', ['deletefile' => $laporan->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                        <button class="btn btn-danger btn-sm" type="submitted">
                                            <i class="fas fa-trash">
                                            </i>
                                                Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                  @empty
                  @endforelse
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

</section>

@endsection