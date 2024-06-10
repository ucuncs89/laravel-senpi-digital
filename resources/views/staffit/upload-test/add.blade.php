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
                    <label for="personil" class="form-label">Personil<span style="color: red">*</span></label>
                    <input class="form-control" type="text" id="personil" name="personil" placeholder="Masukan Personil"
                        required>
                </div>

                <div class="mb-3">
                    <label for="test-kesehatan" class="form-label">Hasil Test Kesehatan<span
                            style="color: red">*</span></label>
                    <input class="form-control" type="file" id="test-kesehatan" name="test-kesehatan" required>
                </div>

                <div class="mb-3">
                    <label for="test-psikologi" class="form-label">Hasil Test Psikologi<span
                            style="color: red">*</span></label>
                    <input class="form-control" type="file" id="test-psikologi" name="test-psikologi" required>
                </div>

                <div class="mb-3">
                    <label for="test-menembak" class="form-label">Hasil Test Menembak<span
                            style="color: red">*</span></label>
                    <input class="form-control" type="file" id="test-menembak" name="test-menembak" required>
                </div>

                <div class="section-footer-pengajuan">
                    <a href="{{ route("staff-it-upload-test.index") }}" class="btn btn-danger">Batal</a>

                    <button class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection
