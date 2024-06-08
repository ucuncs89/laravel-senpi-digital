@extends("layouts.master")

@section("title", "Personil")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>NRP</th>
                        <th>Pangkat</th>
                        <th>Satuan</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kamil</td>
                            <td>00123456</td>
                            <td>Bripda</td>
                            <td>Reskrim</td>
                            <td>Ba Reskrim</td>
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
