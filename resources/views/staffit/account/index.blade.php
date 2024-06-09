@extends("layouts.master")
@extends("partials.modal")

@section("title", "Akun")

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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($akun as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->personil->nama }}</td>
                                <td>{{ $data->personil->nrp }}</td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="text-warning text-action"
                                        data-id="{{ $data->id_akun }}" onclick="editAkun(this)">Edit</a>
                                    <form action="{{ route("staff-it-akun.delete", $data->id_akun) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit"
                                            class="btn btn-link text-danger text-action m-0 p-0">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route("staff-it-akun.post") }}">
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

                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" placeholder="Username"
                                name="username">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Modal Edit Data --}}
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
                            <input type="text" class="form-control" id="edit_nama" placeholder="Nama"
                                name="nama">
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

                        <div class="mb-3">
                            <input type="text" class="form-control" id="edit_username" placeholder="Username"
                                name="username">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" id="edit_email" placeholder="Email"
                                name="email">
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
        function editAkun(element) {
            var id = $(element).data('id');
            $.get("{{ url("staff-it/akun") }}/" + id + "/edit", function(data) {
                $('#editForm').attr('action', "{{ url("staff-it/akun") }}/" + id + "/update");
                $('#edit_nrp').val(data.personil.nrp);
                $('#edit_nama').val(data.personil.nama);
                $('#edit_pangkat').val(data.personil.pangkat);
                $('#edit_jabatan').val(data.personil.jabatan);
                $('#edit_kesatuan').val(data.personil.kesatuan);
                $('#edit_username').val(data.username);
                $('#edit_email').val(data.email);
                $('#editModal').modal('show');
            });
        }
    </script>
@endsection
