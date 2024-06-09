@extends("layouts.master")

@section("title", "Laporan")

@section("content")
    <div class="content content-inner">
        <div class="section-content">
            <h4>Pilihan Cetak</h4>

            <div class="mt-4 report-section">
                <div class="report-section-label">
                    <span>Jenis Laporan</span>
                </div>

                <div class="report-section-input">
                    <select class="form-select" aria-label="jenis-laporan">
                        <option selected>Pilih Jenis Laporan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 report-section">
                <div class="report-section-label">
                    <span>Periode</span>
                </div>

                <div class="report-section-input">
                    <select class="form-select" aria-label="jenis-laporan">
                        <option selected>Pilih Periode Sampai Dengan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 report-section">
                <div class="report-section-label">
                    <span>Tipe Data</span>
                </div>

                <div class="report-section-input form-input-checkbox">
                    <div class="form-check mr-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Pdf
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Excel
                        </label>
                    </div>
                </div>
            </div>

            <div class="report-section-footer">
                <button class="btn btn-primary">Unduh</button>
            </div>
        </div>
    </div>
@endsection
