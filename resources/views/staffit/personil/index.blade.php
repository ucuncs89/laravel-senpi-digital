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
                                        data-id="{{ $data->id_personil }}" onclick="editPersonil(this)">Edit</a>
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

    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route("staff-it-personil.post") }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nrp" placeholder="NRP" name="nrp">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="pangkat" placeholder="Pangkat" name="pangkat">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" name="jabatan">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="kesatuan" placeholder="Kesatuan"
                                name="kesatuan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="edit_nrp" placeholder="NRP" name="nrp">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="edit_nama" placeholder="Nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="edit_pangkat" placeholder="Pangkat"
                                name="pangkat">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="edit_jabatan" placeholder="Jabatan"
                                name="jabatan">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="edit_kesatuan" placeholder="Kesatuan"
                                name="kesatuan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editPersonil(element) {
            var id = $(element).data('id');
            $.get("{{ url("staff-it/personil") }}/" + id + "/edit", function(data) {
                $('#editForm').attr('action', "{{ url("staff-it/personil") }}/" + id + "/update");
                $('#edit_nrp').val(data.nrp);
                $('#edit_nama').val(data.nama);
                $('#edit_pangkat').val(data.pangkat);
                $('#edit_jabatan').val(data.jabatan);
                $('#edit_kesatuan').val(data.kesatuan);
                $('#editModal').modal('show');
            });
        }
    </script>
@endsection
