@extends("layouts.master")

@section("title", "Senjata Api")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
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
