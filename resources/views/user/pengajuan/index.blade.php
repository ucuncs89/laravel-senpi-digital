@extends("layouts.master")

@section("title", "Pengajuan")

@section("content")
    <div class="content content-inner">
        <section class="section-content-profile">
            <div class="card mb-3">
                <form>
                    <div class="card-body section-edit-profile">
                        <h4 class="mb-4">Data Senjata</h4>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type<span style="color: red">*</span></label>
                            <select id="type" class="form-select" aria-label="Default select example" required>
                                <option selected>Pilih Type Senjata</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis<span style="color: red">*</span></label>
                            <select id="jenis" class="form-select" aria-label="Default select example" required>
                                <option selected>Pilih Jenis Senjata</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor<span style="color: red">*</span></label>
                            <select id="nomor" class="form-select" aria-label="Default select example" required>
                                <option selected>Pilih Nomor Senjata</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kaliber" class="form-label">Kaliber<span style="color: red">*</span></label>
                            <select id="kaliber" class="form-select" aria-label="Default select example" required>
                                <option selected>Pilih Kaliber Senjata</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="test-kesehatan" class="form-label">Hasil Test Kesehatan<span style="color: red">*</span></label>
                            <input class="form-control" type="file" id="test-kesehatan" name="test-kesehatan" required>
                        </div>

                        <div class="mb-3">
                            <label for="test-psikologi" class="form-label">Hasil Test Psikologi<span style="color: red">*</span></label>
                            <input class="form-control" type="file" id="test-psikologi" name="test-psikologi" required>
                        </div>

                        <div class="mb-3">
                            <label for="test-menembak" class="form-label">Hasil Test Menembak<span style="color: red">*</span></label>
                            <input class="form-control" type="file" id="test-menembak" name="test-menembak" required>
                        </div>


                        <div class="section-footer-pengajuan">
                            <button class="btn btn-danger">Batal</button>

                            <button class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
