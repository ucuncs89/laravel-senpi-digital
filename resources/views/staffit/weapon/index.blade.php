@extends("layouts.master")
@extends("partials.modal")

@section("title", "Senjata Api")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-plus-circle"></i> Tambah</button>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Type</th>
                        <th>Nomor</th>
                        <th>Kaliber</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pistol</td>
                            <td>HS</td>
                            <td>HS 021115</td>
                            <td>9 mm</td>
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
                <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="type" id="type" placeholder="Type">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" name="kaliber" id="kaliber" placeholder="Kaliber">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
@endsection
