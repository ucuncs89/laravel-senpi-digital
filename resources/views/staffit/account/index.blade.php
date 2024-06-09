@extends("layouts.master")

@section("title", "Akun")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-end">
                <a href="#" class="btn btn-primary"> <i class="bi bi-plus-circle"></i> Tambah</a>
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
