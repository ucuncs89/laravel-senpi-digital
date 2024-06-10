@extends("layouts.master")
@section("title", "Upload Test")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <div class="mb-3 text-center">
                <h4>Tambah Test</h4>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama-test" class="form-label">Nama Test<span style="color: red">*</span></label>
                    <input class="form-control" type="text" id="nama-test" name="nama-test"
                        placeholder="Masukan Nama Test" required>
                </div>

                <div class="mb-3">
                    <label for="personil_id" class="form-label">Personil<span style="color: red">*</span></label>
                    <select name="personil" id="personil_id" class="form-control">
                        @foreach ($personil as $data)
                            <option value="{{ $data->personil_id }}">{{ $data->nrp }} - {{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="test-kesehatan" class="form-label">Hasil Test Kesehatan<span
                                    style="color: red">*</span></label>
                            <input class="form-control" type="file" id="test-kesehatan" name="test-kesehatan" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="test-psikologi" class="form-label">Hasil Test Psikologi<span
                                    style="color: red">*</span></label>
                            <input class="form-control" type="file" id="test-psikologi" name="test-psikologi" required>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <label for="test-menembak" class="form-label">Hasil Test Menembak<span
                                    style="color: red">*</span></label>
                            <input class="form-control" type="file" id="test-menembak" name="test-menembak" required>
                        </div>
                    </div>
                </div>

                <div class="section-footer-pengajuan">
                    <a href="{{ route("staff-it-upload-test.index") }}" class="btn btn-danger">Batal</a>

                    <button class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection
