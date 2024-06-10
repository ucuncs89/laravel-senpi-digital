@extends("layouts.master")
@extends("partials.modal")
@section("title", "Upload Test")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-end">
                <a href="{{route('staff-it-upload-test.add')}}" class="btn btn-primary"> <i
                        class="bi bi-plus-circle"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table-striped table" data-toggle="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Test</th>
                            <th>Personil</th>
                            <th>Test Kesehatan</th>
                            <th>Test Psikolog</th>
                            <th>Test Menembak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Latihan</td>
                            <td>Tantama</td>
                            <td>file</td>
                            <td>file</td>
                            <td>file</td>
                            <td>
                                <span class="text-warning text-action">Edit</span>
                                <span class="btn btn-link text-danger text-action m-0 p-0">Hapus</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
