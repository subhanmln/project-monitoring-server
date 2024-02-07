@extends('layout.layout')

@section('title', 'Data Server')

@section('server', 'active')

@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Server</li>
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
                                    <h4>{{$title}}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <!-- Form Button trigger modal -->
                            <div class="text-end">
                                <button class="btn btn-success  mb-2 " data-bs-toggle="modal" data-bs-target="#inputFormModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>                                    <span class="btn-text-inner">Tambah Server</span>
                                </button>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">No.</th>
                                            <th scope="col">Nama Server</th>
                                            <th scope="col">Host</th>
                                            <th scope="col">Rak</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Pengelola</th>
                                            <th scope="col">IP 1</th>
                                            <th scope="col">IP 2</th>
                                            <th scope="col">IP 3</th>
                                            <th scope="col">Port</th>
                                            <th scope="col">DNS</th>
                                            <th scope="col">OS</th>
                                            <th scope="col">Compatibility</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Tipe</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Serial Number</th>
                                            <th scope="col">Tahun Pengadaan</th>
                                            <th scope="col">Pengadaan</th>
                                            <th scope="col">Kondisi</th>
                                            <th scope="col">Cluster</th>
                                            <th scope="col">Provisioned Space</th>
                                            <th scope="col">Used Space</th>
                                            <th scope="col">Host CPU</th>
                                            <th scope="col">Host Mem</th>
                                            <th scope="col">Memory Size</th>
                                            <th scope="col">CPUs</th>
                                            <th scope="col">Up Time</th>
                                            <th scope="col">Down Time</th>
                                            <th scope="col">Tipe Processor</th>
                                            <th scope="col">Keterangan</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @forelse ( $servers as $server )

                                        <tr>
                                            <td class="text-center">
                                                <h6 class="mb-0">{{$no++}}</h6>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->nama_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->host_server}}</h6>
                                                    </div>
                                                </div>
                                            </td><td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->rak_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->nama_lokasi}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->nama_pengelola}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->IP1_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->IP2_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->IP3_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->port_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->nama_dns}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->nama_os}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->nama_compatibility}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->status_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->tipe_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->merk_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->serial_number_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->tahun_pengadaan_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->pengadaan_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->kondisi_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->cluster_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->provisioned_space_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->used_space_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->host_cpu_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->host_mem_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->memory_size_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->cpus_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->uptime_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->downtime_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{{$server->tipe_processor_server}}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="media">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0">{!!$server->keterangan_server!!}</h6>
                                                    </div>
                                                </div>
                                            </td>


                                            <td class="text-center">
                                                <div class="action-btns">
                                                    {{-- <a href="{{ route('server.edit', $server->id) }}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    </a> --}}
                                                    <div class="d-flex justify-content-center">
                                                        <button style="background:transparent; border:none; color:transparent;" data-bs-toggle="modal" data-bs-target="#EditModal{{$server->id}}">
                                                            <a class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            </a>
                                                        </button>
                                                    <form onsubmit="return confirm('Apakah anda yakin ?');" action="{{ route('server.destroy', $server->id) }}" method="POST">
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
                                    {!!$servers->withQueryString()->links('pagination::bootstrap-5')!!}

                                </div>


                            </div>

</div>

<!-- Add Modal -->
<div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">

        <div class="modal-header" id="inputFormModalLabel">

            <h5 class="modal-title">Tambah <b>{{$title}}</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('server.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <label for="inputNama" class="form-label">Nama Server</label>
                    <input type="text" class="form-control @error('nama_server') is-invalid @enderror" id="inputNama" value="{{ old('nama_server') }}" placeholder="Masukan Nama Server..." name="nama_server">
                    @error('nama_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Host Server</label>
                    <input type="text" class="form-control @error('host_server') is-invalid @enderror" id="inputNama" value="{{ old('host_server') }}" placeholder="Masukan Host Server..." name="host_server">
                    @error('host_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Rak Server</label>
                    <input type="text" class="form-control @error('rak_server') is-invalid @enderror" id="inputNama" value="{{ old('rak_server') }}" placeholder="Masukan Rak Server..." name="rak_server">
                    @error('rak_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Lokasi</label>
                    <select id="inputState" class="form-select @error('id_lokasi') is-invalid @enderror" name="id_lokasi">
                        <option selected hidden>Pilih Lokasi Server...</option>
                        @foreach ($lokasis as $lokasi )
                        <option value="{{$lokasi->id}}">{{$lokasi->nama_lokasi}}</option>
                        @endforeach
                    </select>
                    @error('id_lokasi')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">Pengelola</label>
                    <select id="inputState" class="form-select @error('id_pengelola') is-invalid @enderror" name="id_pengelola">
                        <option selected hidden>Pilih Pengelola Server...</option>
                        @foreach ($pengelolas as $pengelola )
                        <option value="{{$pengelola->id}}">{{$pengelola->nama_pengelola}}</option>
                        @endforeach
                    </select>
                    @error('id_pengelola')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Internet Protocol (IP) - 1</label>
                    <input type="text" class="form-control @error('IP1_server') is-invalid @enderror" id="inputNama" value="{{ old('IP1_server') }}" placeholder="Masukan IP-1 Server..." name="IP1_server">
                    @error('IP1_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Internet Protocol (IP) - 2</label>
                    <input type="text" class="form-control @error('IP1_server') is-invalid @enderror" id="inputNama" value="{{ old('IP2_server') }}" placeholder="Masukan IP-2 Server..." name="IP2_server">
                    @error('IP2_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Internet Protocol (IP) - 3</label>
                    <input type="text" class="form-control @error('IP3_server') is-invalid @enderror" id="inputNama" value="{{ old('IP3_server') }}" placeholder="Masukan IP-3 Server..." name="IP3_server">
                    @error('IP3_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Port Server</label>
                    <input type="text" class="form-control @error('port_server') is-invalid @enderror" id="inputNama" value="{{ old('port_server') }}" placeholder="Masukan Port Server..." name="port_server">
                    @error('port_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">Domain Name System (DNS) Server</label>
                    <select id="inputState" class="form-select @error('id_dns') is-invalid @enderror" name="id_dns">
                        <option selected hidden>Pilih DNS Server...</option>
                        @foreach ($dnss as $dns )
                        <option value="{{$dns->id}}">{{$dns->nama_dns}}</option>
                        @endforeach
                    </select>
                    @error('id_dns')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Operting System (OS) Server</label>
                    <select id="inputState" class="form-select @error('id_os') is-invalid @enderror" name="id_os">
                        <option selected hidden>Pilih OS Server...</option>
                        @foreach ($oss as $os )
                        <option value="{{$os->id}}">{{$os->nama_os}}</option>
                        @endforeach
                    </select>
                    @error('id_os')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Compatibility Server</label>
                    <select id="inputState" class="form-select @error('id_compatibility') is-invalid @enderror" name="id_compatibility">
                        <option selected hidden>Pilih Compatibility Server...</option>
                        @foreach ($compatibilitys as $comp )
                        <option value="{{$comp->id}}">{{$comp->nama_compatibility}}</option>
                        @endforeach
                    </select>
                    @error('id_compatibility')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Status Server</label>
                    <input type="text" class="form-control @error('status_server') is-invalid @enderror" id="inputNama" value="{{ old('status_server') }}" placeholder="Masukan Status Server..." name="status_server">
                    @error('status_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Kondisi Server</label>
                    <input type="text" class="form-control @error('kondisi_server') is-invalid @enderror" id="inputNama" value="{{ old('kondisi_server') }}" placeholder="Masukan Kondisi Server..." name="kondisi_server">
                    @error('kondisi_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Tipe Server</label>
                    <input type="text" class="form-control @error('tipe_server') is-invalid @enderror" id="inputNama" value="{{ old('tipe_server') }}" placeholder="Masukan Tipe Server..." name="tipe_server">
                    @error('tipe_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Merk Server</label>
                    <input type="text" class="form-control @error('merk_server') is-invalid @enderror" id="inputNama" value="{{ old('merk_server') }}" placeholder="Masukan Merk Server..." name="merk_server">
                    @error('merk_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Serial Number Server</label>
                    <input type="text" class="form-control @error('serial_number_server') is-invalid @enderror" id="inputNama" value="{{ old('serial_number_server') }}" placeholder="Masukan Serial Number Server..." name="serial_number_server">
                    @error('serial_number_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Tahun Pengadaan Server</label>
                    <input type="date" class="form-control @error('tahun_pengadaan_server') is-invalid @enderror" id="inputNama" value="{{ old('tahun_pengadaan_server') }}" placeholder="Masukan Tahun Pengadaan Server..." name="tahun_pengadaan_server">
                    @error('tahun_pengadaan_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Pengadaan Server</label>
                    <input type="text" class="form-control @error('pengadaan_server') is-invalid @enderror" id="inputNama" value="{{ old('pengadaan_server') }}" placeholder="Masukan Pengadaan Server..." name="pengadaan_server">
                    @error('pengadaan_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Cluster Server</label>
                    <input type="text" class="form-control @error('cluster_server') is-invalid @enderror" id="inputNama" value="{{ old('cluster_server') }}" placeholder="Masukan Cluster Server..." name="cluster_server">
                    @error('cluster_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Provisioned Space Server</label>
                    <input type="text" class="form-control @error('provisioned_space_server') is-invalid @enderror" id="inputNama" value="{{ old('provisioned_space_server') }}" placeholder="Masukan Provisioned Space Server..." name="provisioned_space_server">
                    @error('provisioned_space_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Used Space Server</label>
                    <input type="text" class="form-control @error('used_space_server') is-invalid @enderror" id="inputNama" value="{{ old('used_space_server') }}" placeholder="Masukan Used Space Server..." name="used_space_server">
                    @error('used_space_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Host CPU Server</label>
                    <input type="text" class="form-control @error('host_cpu_server') is-invalid @enderror" id="inputNama" value="{{ old('host_cpu_server') }}" placeholder="Masukan Host CPU Server..." name="host_cpu_server">
                    @error('host_cpu_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Host Mem Server</label>
                    <input type="text" class="form-control @error('host_mem_server') is-invalid @enderror" id="inputNama" value="{{ old('host_mem_server') }}" placeholder="Masukan Mem Server..." name="host_mem_server">
                    @error('host_mem_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Memory Size Server</label>
                    <input type="text" class="form-control @error('memory_size_server') is-invalid @enderror" id="inputNama" value="{{ old('memory_size_server') }}" placeholder="Masukan Memory Size Server..." name="memory_size_server">
                    @error('memory_size_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">CPUs Server</label>
                    <input type="text" class="form-control @error('cpus_server') is-invalid @enderror" id="inputNama" value="{{ old('cpus_server') }}" placeholder="Masukan CPUs Server..." name="cpus_server">
                    @error('cpus_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Uptime Server</label>
                    <input type="text" class="form-control @error('uptime_server') is-invalid @enderror" id="inputNama" value="{{ old('uptime_server') }}" placeholder="Masukan Uptime Server..." name="uptime_server">
                    @error('uptime_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Downtime Server</label>
                    <input type="text" class="form-control @error('downtime_server') is-invalid @enderror" id="inputNama" value="{{ old('downtime_server') }}" placeholder="Masukan Downtime Server..." name="downtime_server">
                    @error('downtime_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputNama" class="form-label">Tipe Processor Server</label>
                    <input type="text" class="form-control @error('tipe_processor_server') is-invalid @enderror" id="inputNama" value="{{ old('tipe_processor_server') }}" placeholder="Masukan Tipe Processor Server..." name="tipe_processor_server">
                    @error('tipe_processor_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputNama" class="form-label">Keterangan Server</label>
                    <textarea class="form-control" name="keterangan_server" rows="5" placeholder="Keterangan Server">{{ old('keterangan_server') }}</textarea>
                    @error('keterangan_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" >Submit</button>
                </div>
            </form>

        </div>

      </div>
    </div>
</div>
<!-- End Add Modal -->

<!-- Edit Modal -->
@foreach ( $servers as $server )
<div class="modal fade inputForm-modal" id="EditModal{{$server->id}}" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

        <div class="modal-header" id="inputFormModalLabel">

            <h5 class="modal-title">Edit <b>{{$title}}</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('server.update', $server->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label for="inputNama" class="form-label">Nama Server</label>
                    <input type="text" class="form-control @error('nama_server') is-invalid @enderror" id="inputNama" value="{{$server->nama_server}}" placeholder="Masukan Nama Server..." name="nama_server">
                    @error('nama_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Host Server</label>
                    <input type="text" class="form-control @error('host_server') is-invalid @enderror" id="inputNama" value="{{$server->host_server}}" placeholder="Masukan Host Server..." name="host_server">
                    @error('host_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Rak Server</label>
                    <input type="text" class="form-control @error('rak_server') is-invalid @enderror" id="inputNama" value="{{$server->rak_server}}" placeholder="Masukan Rak Server..." name="rak_server">
                    @error('rak_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Lokasi</label>
                    <select id="inputState" class="form-select @error('id_lokasi') is-invalid @enderror" name="id_lokasi">
                        <option value="{{$server->id_lokasi}}" selected hidden>{{$server->nama_lokasi}}</option>
                        @foreach ($lokasis as $lokasi )
                        <option value="{{$lokasi->id}}">{{$lokasi->nama_lokasi}}</option>
                        @endforeach
                    </select>
                    @error('id_lokasi')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">Pengelola</label>
                    <select id="inputState" class="form-select @error('id_pengelola') is-invalid @enderror" name="id_pengelola">
                        <option value="{{$server->id_pengelola}}" selected hidden>{{$server->nama_pengelola}}</option>
                        @foreach ($pengelolas as $pengelola )
                        <option value="{{$pengelola->id}}">{{$pengelola->nama_pengelola}}</option>
                        @endforeach
                    </select>
                    @error('id_pengelola')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Internet Protocol (IP) - 1</label>
                    <input type="text" class="form-control @error('IP1_server') is-invalid @enderror" id="inputNama" value="{{$server->IP1_server}}" placeholder="Masukan IP-1 Server..." name="IP1_server">
                    @error('IP1_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Internet Protocol (IP) - 2</label>
                    <input type="text" class="form-control @error('IP1_server') is-invalid @enderror" id="inputNama" value="{{$server->IP2_server}}" placeholder="Masukan IP-2 Server..." name="IP2_server">
                    @error('IP2_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputNama" class="form-label">Internet Protocol (IP) - 3</label>
                    <input type="text" class="form-control @error('IP3_server') is-invalid @enderror" id="inputNama" value="{{$server->IP3_server}}" placeholder="Masukan IP-3 Server..." name="IP3_server">
                    @error('IP3_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Port Server</label>
                    <input type="text" class="form-control @error('port_server') is-invalid @enderror" id="inputNama" value="{{$server->port_server}}" placeholder="Masukan Port Server..." name="port_server">
                    @error('port_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputState" class="form-label">Domain Name System (DNS) Server</label>
                    <select id="inputState" class="form-select @error('id_dns') is-invalid @enderror" name="id_dns">
                        <option value="{{$server->id_dns}}" selected hidden>{{$server->nama_dns}}</option>
                        @foreach ($dnss as $dns )
                        <option value="{{$dns->id}}">{{$dns->nama_dns}}</option>
                        @endforeach
                    </select>
                    @error('id_dns')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Operting System (OS) Server</label>
                    <select id="inputState" class="form-select @error('id_os') is-invalid @enderror" name="id_os">
                        <option value="{{$server->id_os}}" selected hidden>{{$server->nama_os}}</option>
                        @foreach ($oss as $os )
                        <option value="{{$os->id}}">{{$os->nama_os}}</option>
                        @endforeach
                    </select>
                    @error('id_os')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Compatibility Server</label>
                    <select id="inputState" class="form-select @error('id_compatibility') is-invalid @enderror" name="id_compatibility">
                        <option value="{{$server->id_compatibility}}" selected hidden>{{$server->nama_compatibility}}</option>
                        @foreach ($compatibilitys as $comp )
                        <option value="{{$comp->id}}">{{$comp->nama_compatibility}}</option>
                        @endforeach
                    </select>
                    @error('id_compatibility')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Status Server</label>
                    <input type="text" class="form-control @error('status_server') is-invalid @enderror" id="inputNama" value="{{$server->status_server}}" placeholder="Masukan Status Server..." name="status_server">
                    @error('status_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Kondisi Server</label>
                    <input type="text" class="form-control @error('kondisi_server') is-invalid @enderror" id="inputNama" value="{{$server->kondisi_server}}" placeholder="Masukan Kondisi Server..." name="kondisi_server">
                    @error('kondisi_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Tipe Server</label>
                    <input type="text" class="form-control @error('tipe_server') is-invalid @enderror" id="inputNama" value="{{$server->tipe_server}}" placeholder="Masukan Tipe Server..." name="tipe_server">
                    @error('tipe_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Merk Server</label>
                    <input type="text" class="form-control @error('merk_server') is-invalid @enderror" id="inputNama" value="{{$server->merk_server}}" placeholder="Masukan Merk Server..." name="merk_server">
                    @error('merk_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Serial Number Server</label>
                    <input type="text" class="form-control @error('serial_number_server') is-invalid @enderror" id="inputNama" value="{{$server->serial_number_server}}" placeholder="Masukan Serial Number Server..." name="serial_number_server">
                    @error('serial_number_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Tahun Pengadaan Server</label>
                    <input type="date" class="form-control @error('tahun_pengadaan_server') is-invalid @enderror" id="inputNama" value="{{$server->tahun_pengadaan_server}}" placeholder="Masukan Tahun Pengadaan Server..." name="tahun_pengadaan_server">
                    @error('tahun_pengadaan_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Pengadaan Server</label>
                    <input type="text" class="form-control @error('pengadaan_server') is-invalid @enderror" id="inputNama" value="{{$server->pengadaan_server}}" placeholder="Masukan Pengadaan Server..." name="pengadaan_server">
                    @error('pengadaan_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNama" class="form-label">Cluster Server</label>
                    <input type="text" class="form-control @error('cluster_server') is-invalid @enderror" id="inputNama" value="{{$server->cluster_server}}" placeholder="Masukan Cluster Server..." name="cluster_server">
                    @error('cluster_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Provisioned Space Server</label>
                    <input type="text" class="form-control @error('provisioned_space_server') is-invalid @enderror" id="inputNama" value="{{$server->provisioned_space_server}}" placeholder="Masukan Provisioned Space Server..." name="provisioned_space_server">
                    @error('provisioned_space_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Used Space Server</label>
                    <input type="text" class="form-control @error('used_space_server') is-invalid @enderror" id="inputNama" value="{{$server->used_space_server}}" placeholder="Masukan Used Space Server..." name="used_space_server">
                    @error('used_space_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Host CPU Server</label>
                    <input type="text" class="form-control @error('host_cpu_server') is-invalid @enderror" id="inputNama" value="{{$server->host_cpu_server}}" placeholder="Masukan Host CPU Server..." name="host_cpu_server">
                    @error('host_cpu_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Host Mem Server</label>
                    <input type="text" class="form-control @error('host_mem_server') is-invalid @enderror" id="inputNama" value="{{$server->host_mem_server}}" placeholder="Masukan Mem Server..." name="host_mem_server">
                    @error('host_mem_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Memory Size Server</label>
                    <input type="text" class="form-control @error('memory_size_server') is-invalid @enderror" id="inputNama" value="{{$server->memory_size_server}}" placeholder="Masukan Memory Size Server..." name="memory_size_server">
                    @error('memory_size_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">CPUs Server</label>
                    <input type="text" class="form-control @error('cpus_server') is-invalid @enderror" id="inputNama" value="{{$server->cpus_server}}" placeholder="Masukan CPUs Server..." name="cpus_server">
                    @error('cpus_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Uptime Server</label>
                    <input type="text" class="form-control @error('uptime_server') is-invalid @enderror" id="inputNama" value="{{$server->uptime_server}}" placeholder="Masukan Uptime Server..." name="uptime_server">
                    @error('uptime_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Downtime Server</label>
                    <input type="text" class="form-control @error('downtime_server') is-invalid @enderror" id="inputNama" value="{{$server->downtime_server}}" placeholder="Masukan Downtime Server..." name="downtime_server">
                    @error('downtime_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputNama" class="form-label">Tipe Processor Server</label>
                    <input type="text" class="form-control @error('tipe_processor_server') is-invalid @enderror" id="inputNama" value="{{$server->tipe_processor_server}}" placeholder="Masukan Tipe Processor Server..." name="tipe_processor_server">
                    @error('tipe_processor_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputNama" class="form-label">Keterangan Server</label>
                    <textarea class="form-control" name="keterangan_server" rows="5" placeholder="Keterangan Server">{!!$server->provisioned_space_server!!}</textarea>
                    @error('keterangan_server')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" style="margin-top:5px" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                        <strong>Error!</strong>  {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect" >Submit</button>
                </div>
            </form>

        </div>

    </div>
    </div>
</div>
@endforeach
<!-- End Edit Modal -->
@endsection
