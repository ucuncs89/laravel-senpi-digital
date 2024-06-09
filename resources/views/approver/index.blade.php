@extends("layouts.master")

@section("title", "Persetujuan")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="table-responsive">
                <table id="datatable" class="table-striped table" data-toggle="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>NRP</th>
                            <th>Jabatan</th>
                            <th>Jenis Senjata</th>
                            <th>Type</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Asep</td>
                            <td>00123456</td>
                            <td>Kanit 4 Reskrim</td>
                            <td>Pistol</td>
                            <td>HS</td>
                            <td>
                                <span data-bs-toggle="modal" data-bs-target="#modalPreview" class="text-warning text-action">Lihat</span>
                                <span class="text-danger text-action" data-bs-toggle="modal" data-bs-target="#modalReject">Tolak</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalReject" tabindex="-1" aria-labelledby="modalRejectLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    @csrf
                    <div class="modal-body">
                        <h4 class="mb-4">Tolak Persetujuan</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero velit nostrum illum, totam mollitia ad ea voluptates necessitatibus nam voluptas deleniti delectus eligendi quidem doloremque! Perspiciatis laborum voluptatum nihil!</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Preview --}}
    <div class="modal fade" id="modalPreview" tabindex="-1" aria-labelledby="modalPreviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-preview">
            <div class="modal-content">
                <form method="POST">
                    @csrf
                    <div class="modal-body">
                        <h4>Persetujuan</h4>
                        <div class="approver-form-wrap">
                            <div class="approver-form-item">
                                <p class="mb-3">Data Diri</p>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" disabled>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nrp" id="nrp" placeholder="NRP" disabled>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" disabled>
                                </div>
                            </div>

                            <div class="approver-form-item">
                                <p class="mb-3">Data Senjata Api</p>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" disabled>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="type" id="type" placeholder="Type" disabled>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="kaliber" id="kaliber" placeholder="Kaliber" disabled>
                                </div>
                            </div>

                        </div>

                        <div class="approver-preview-file">
                            <div class="approver-preview-file-item"></div>
                            <div class="approver-preview-file-item"></div>
                            <div class="approver-preview-file-item"></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-success">Setuju</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
