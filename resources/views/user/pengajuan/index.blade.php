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
                            <label for="jenis" class="form-label">Jenis<span style="color: red">*</span></label>
                            <select id="jenis" class="form-select" aria-label="Default select example" required>
                                <option value="" selected>Pilih Jenis Senjata</option>
                                @foreach ($weapons as $weapon)
                                    <option value="{{ $weapon->jenis }}">{{ $weapon->jenis }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type<span style="color: red">*</span></label>
                            <select id="type" class="form-select" aria-label="Default select example" disabled>
                                <option value="" selected>Pilih Type Senjata</option>
                                @foreach ($weapons as $weapon)
                                    <option value="{{ $weapon->type }}" data-jenis="{{ $weapon->type }}">{{ $weapon->type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor<span style="color: red">*</span></label>
                            <select id="nomor" class="form-select" aria-label="Default select example" disabled>
                                <option value="" selected>Pilih Nomor Senjata</option>
                                @foreach ($weapons as $weapon)
                                    <option value="{{ $weapon->nomor }}" data-jenis="{{ $weapon->nomor }}">{{ $weapon->nomor }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kaliber" class="form-label">Kaliber<span style="color: red">*</span></label>
                            <select id="kaliber" class="form-select" aria-label="Default select example" disabled>
                                <option value="" selected>Pilih Kaliber Senjata</option>
                                @foreach ($weapons as $weapon)
                                    <option value="{{ $weapon->kaliber }}" data-jenis="{{ $weapon->kaliber }}">{{ $weapon->kaliber }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="hasil-test" class="form-label">Hasil Test<span style="color: red">*</span></label>
                            <select id="hasil-test" class="form-select" aria-label="Default select example" required>
                                <option value="" selected>Pilih Hasil Test</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="section-footer-pengajuan">
                            <button class="btn btn-danger" type="button">Batal</button>
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('jenis').addEventListener('change', function () {
            var selectedJenis = this.value;

            var typeSelect = document.getElementById('type');
            var nomorSelect = document.getElementById('nomor');
            var kaliberSelect = document.getElementById('kaliber');

            filterOptions(typeSelect, selectedJenis);
            filterOptions(nomorSelect, selectedJenis);
            filterOptions(kaliberSelect, selectedJenis);
        });

        function filterOptions(selectElement, selectedJenis) {
            Array.from(selectElement.options).forEach(function(option) {
                selectElement.value = option.getAttribute('data-jenis');
            });
        }
    </script>
@endsection
