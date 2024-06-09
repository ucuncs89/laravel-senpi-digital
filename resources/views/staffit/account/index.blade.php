@extends("layouts.master")
@extends("partials.modal")

@section("title", "Akun")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-plus-circle"></i> Tambah</button>
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
                        <tr>
                            <td>1</td>
                            <td>Kamil</td>
                            <td>00123456</td>
                            <td>kamil03</td>
                            <td>kamil@mail.com</td>
                            <td>
                                <span class="text-warning text-action">Edit</span>
                                <span class="text-danger text-action">Hapus</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("contentModal")
    <form>
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <input type="text" class="form-control" id="nprp" placeholder="NPRP">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="nama" placeholder="Nama">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="pangkat" placeholder="Pangkat">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="jabatan" placeholder="Jabatan">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="kesatuan" placeholder="Kesatuan">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
@endsection
