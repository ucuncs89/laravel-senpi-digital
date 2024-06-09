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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
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
                                    <a class="text-warning text-action">Edit</a>
                                    <form
                                        action="{{ $data->id_akun ? route("staff-it-akun-delete", ["id" => $data->id_akun]) : "#" }}"
                                        method="POST"
                                        @if ($data->id_akun) onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')" @endif>
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="text-danger text-action"
                                            @unless ($data->id_akun) disabled @endunless>Hapus</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("contentModal")
    <form method="POST" action="{{ route("staff-it-akun-post") }}">
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
                <input type="text" class="form-control" id="kesatuan" placeholder="Kesatuan" name="kesatuan">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
@endsection
