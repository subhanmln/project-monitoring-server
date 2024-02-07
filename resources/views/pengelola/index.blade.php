@extends('layout.layout')

@section('title', 'Data Pengelola Server')

@section('pengelola', 'active')

@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">

                <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> {{$title}}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <!-- Form Button trigger modal -->
                            <div class="text-end">
                                <button class="btn btn-success  mb-2 " data-bs-toggle="modal" data-bs-target="#inputFormModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>                                    <span class="btn-text-inner">Tambah Pengelola</span>
                                </button>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">No.</th>
                                            <th scope="col">Nama Pengelola</th>
                                            <th scope="col">Kontak</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @forelse ( $pengelolas as $pengelola )

                                        <tr>
                                            <td class="text-center">
                                                <h6 class="mb-0">{{$no++}}</h6>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$pengelola->nama_pengelola}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{$pengelola->kontak_pengelola}}</p>
                                            </td>

                                            <td class="text-center">
                                                <div class="action-btns">
                                                    {{-- <a href="{{ route('pengelola.edit', $pengelola->id) }}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    </a> --}}
                                                    <div class="d-flex justify-content-center">
                                                        <button style="background:transparent; border:none; color:transparent;" data-bs-toggle="modal" data-bs-target="#editFormModal{{$pengelola->id}}">
                                                            <a class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            </a>
                                                        </button>



                                                    <!-- End Edit Modal -->
                                                    <form onsubmit="return confirm('Apakah anda yakin ?');" action="{{ route('pengelola.destroy', $pengelola->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="background:transparent; border:none; color:transparent;">
                                                            <a class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </a>
                                                        </button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </td>
                                            {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form> --}}
                                        </tr>
                                        @empty
                                        <div class="alert alert-gradient alert-dismissible fade show mb-4" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                            <strong>Error!</strong> {{$title}} belum tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    {!!$pengelolas->withQueryString()->links('pagination::bootstrap-5')!!}

                                </div>


                            </div>

</div>

<!-- Add Modal -->
<div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header" id="inputFormModalLabel">

            <h5 class="modal-title">Tambah <b>{{$title}}</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('pengelola.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <label for="inputNama" class="form-label">Nama Pengelola</label>
                    <input type="text" class="form-control @error('nama_pengelola') is-invalid @enderror" id="inputNama" value="{{ old('nama_pengelola') }}" placeholder="Masukan Nama Pengelola..." name="nama_pengelola">
                    @error('nama_pengelola')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Kontak Pengelola</label>
                    <input type="number" class="form-control @error('kontak_pengelola') is-invalid @enderror" id="inputAddress" value="{{ old('kontak_pengelola') }}" placeholder="Masukan Kontak Pengelola..." name="kontak_pengelola">
                    @error('kontak_pengelola')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" >Submit</button>
                </div>
            </form>


        </div>

      </div>
    </div>
</div>
<!-- End Add Modal -->

<!-- Edit Modal -->
@foreach ( $pengelolas as $pengelola )
<div class="modal fade inputForm-modal" id="editFormModal{{$pengelola->id}}" tabindex="-1" role="dialog" aria-labelledby="editFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header" id="editFormModalLabel">

            <h5 class="modal-title">Edit <b>{{$title}}</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('pengelola.update', $pengelola->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12" style="text-align: left">
                    <label for="inputNama" class="form-label">Nama Pengelola</label>
                    <input type="text" class="form-control @error('nama_pengelola') is-invalid @enderror" id="inputNamaEdit" value="{{ $pengelola->nama_pengelola }}" placeholder="Masukan Nama Pengelola..." name="nama_pengelola">
                    @error('nama_pengelola')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddressEdit" class="form-label">Kontak Pengelola</label>
                    <input type="number" class="form-control @error('kontak_pengelola') is-invalid @enderror" id="inputAddressEdit" value="{{ $pengelola->kontak_pengelola }}" placeholder="Masukan Kontak Pengelola..." name="kontak_pengelola">
                    @error('kontak_pengelola')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" >Submit</button>
                </div>
            </form>


        </div>

      </div>
    </div>
</div>
@endforeach
@endsection
