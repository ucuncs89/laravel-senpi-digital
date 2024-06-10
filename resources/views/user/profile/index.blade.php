@extends("layouts.master")

@section("title", "Profile")

@section("content")
    <div class="content content-inner">
        <section class="section-content-profile">
            <form>
                <div class="card mb-3">
                    <div class="card-body section-edit-profile">
                        <i class="bi bi-person-circle icon-user text-center"></i>

                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="nrp" placeholder="Masukan NRP" name="nrp" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="pangkat" class="form-label">Pangkat<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="pangkat" placeholder="Masukan Pangkat" name="pangkat" required>
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukan Jabatan" name="jabatan" required>
                        </div>

                        <div class="mb-4">
                            <label for="kesatuan" class="form-label">Kesatuan<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="kesatuan" placeholder="Masukan Kesatuan" name="kesatuan" required>
                        </div>
                        <button class="btn btn-success">Ubah</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
