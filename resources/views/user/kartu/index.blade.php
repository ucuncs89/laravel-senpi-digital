@extends("layouts.master")

@section("title", "Profile")

@section("content")
    <div class="content content-inner">
        <section class="section-content">
            <div class="table-responsive">
                <table id="datatable" class="table-striped table" data-toggle="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Kartu</th>
                            <th>NRP</th>
                            <th>Senjata</th>
                            <th>Personil</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>00920129</td>
                            <td>093013</td>
                            <td>AK-47</td>
                            <td>Satgas</td>
                            <td>25 Mei 2024</td>
                            <td>
                                <a href="{{route("kartu-detail", ['id' => 1])}}" class="text-primary">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
