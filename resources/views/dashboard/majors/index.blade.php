@extends('layouts.dashboard')

@section('content')
<section id="configuration">
  <div class="content-header row">
    <div class="content-header-left col-md-4 col-12 mb-2">
      <h3 class="content-header-title">Data Jurusan</h3>
    </div>
    <div class="content-header-right col-md-8 col-12">
      <div class="breadcrumbs-top float-md-right">
        <div class="breadcrumb-wrapper mr-1">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Jurusan </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="#" data-toggle="modal" data-target="#mapel_create_modal"
            class="btn btn-bg-gradient-x-purple-blue col-12 col-md-2 mr-1 mb-1">
            <i class="ft-plus"></i> Tambah Jurusan
          </a>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body card-dashboard">

            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration" id="mapel-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Animasi</td>
                    <td>
                      <div class="d-flex justify-content-start align-items-center">
                        <a href="#" class="btn btn-sm btn-success text-white edit-modal mr-2" data-toggle="modal"
                          data-target="#mapel_edit_modal" title="Ubah Jurusan">
                          <i class="ft-edit"></i>
                        </a>
                        <a href="#" class="btn btn-bg-gradient-x-red-pink btn-sm mx-1 delete-mapel" data-toggle="modal"
                          data-target="#delete_mapel_modal" title="Hapus">
                          <i class="ft-delete"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Teknik Kendaraan Ringan</td>
                    <td>
                      <div class="d-flex justify-content-start align-items-center">
                        <a href="#" class="btn btn-sm btn-success text-white edit-modal mr-2" data-toggle="modal"
                          data-target="#mapel_edit_modal" title="Ubah Jurusan">
                          <i class="ft-edit"></i>
                        </a>
                        <a href="#" class="btn btn-bg-gradient-x-red-pink btn-sm mx-1 delete-mapel" data-toggle="modal"
                          data-target="#delete_mapel_modal" title="Hapus">
                          <i class="ft-delete"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Teknik Sepeda Motor</td>
                    <td>
                      <div class="d-flex justify-content-start align-items-center">
                        <a href="#" class="btn btn-sm btn-success text-white edit-modal mr-2" data-toggle="modal"
                          data-target="#mapel_edit_modal" title="Ubah Jurusan">
                          <i class="ft-edit"></i>
                        </a>
                        <a href="#" class="btn btn-bg-gradient-x-red-pink btn-sm mx-1 delete-mapel" data-toggle="modal"
                          data-target="#delete_mapel_modal" title="Hapus">
                          <i class="ft-delete"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <!-- Add more static data rows as needed -->
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@push('modal')
@include('dashboard.majors.modal.create')
@include('dashboard.majors.modal.edit')
@include('dashboard.majors.modal.delete')
@endpush

@push('js')
@include('dashboard.majors._script')
@endpush

@endsection

