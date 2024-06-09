@extends("layouts.master")
@extends("partials.modal")
@section("title", "Personil")

@section("content")
    @if ($errors->any())
        <div id="error-messages" class="position-absolute fade-out end-0 top-10 p-3" style="z-index: 1000;">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        </div>
    @endif
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah"> <i
                        class="bi bi-plus-circle"></i> Tambah</button>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table-striped table" data-toggle="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NRP</th>
                            <th>Pangkat</th>
                            <th>Kesatuan</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personil as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nrp }}</td>
                                <td>{{ $data->pangkat }}</td>
                                <td>{{ $data->kesatuan }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="text-warning text-action"
                                        data-id="{{ $data->id_personil }}" onclick="editAkun(this)">Edit</a>
                                    <form action="{{ route("staff-it-personil.delete", $data->id_personil) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit"
                                            class="btn btn-link text-danger text-action m-0 p-0">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
