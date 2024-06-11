@extends("layouts.master")

@section("title", "List Pengajuan")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-end">
                <a href="{{route("pengajuan.tambah")}}" class="btn btn-primary"> <i class="bi bi-plus-circle"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Kartu</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Jenis</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($listPersetujuan as $persetujuan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $persetujuan->kode_kartu }}</td>
                                <td>{{ $persetujuan->tanggal_pengajuan }}</td>
                                <td>Pistol</td>
                                <td>{{ $persetujuan->status_description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
