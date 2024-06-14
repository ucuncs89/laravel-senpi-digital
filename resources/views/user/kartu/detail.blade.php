@extends("layouts.master")

@section("title", "Detail Kartu")

@section("content")
    <div class="content content-inner">
        <section class="section-content-profile">

            <div class="card-user mb-4">
                <div class="card-user-header mb-4">
                    <p class="text-responsive text-center">KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
                    <p class="text-responsive text-center">DAERAH JAWA BARAT</p>
                    <p class="text-responsive mb-3 text-center">RESOR CIANJUR</p>
                </div>

                <div class="card-user-body">
                    <h4 class="text-responsive mb-4 text-center">KARTU PEMEGANG SENJATA API DIGITAL</h4>

                    <div class="card-user-body-content">
                        <div>
                            <img id="image-foto-pribadi" class="card-user-profile" src="{{ asset($card->foto_pribadi) }}"
                                alt="User">
                        </div>

                        <div class="card-content-data">
                            <div class="card-content-data-field text-responsive">
                                <div class="mb-3">
                                    <span>Nama:</span>
                                </div>
                                <div class="mb-3">
                                    <span>NRP:</span>
                                </div>
                                <div class="mb-3">
                                    <span>Pangkat:</span>
                                </div>
                                <div class="mb-3">
                                    <span>Jabatan:</span>
                                </div>
                                <div class="mb-3">
                                    <span>Kesatuan:</span>
                                </div>
                            </div>

                            <div class="card-content-data-field-value text-responsive">
                                <div class="mb-3">
                                    <span>{{ $card->nama ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->nrp ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->pangkat ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->jabatan ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->kesatuan ?? "-" }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-user-footer">
                        <p class="text-responsive">BERLKAU S/D {{ $card->berlaku_sampai_dengan }}</p>
                    </div>
                </div>
            </div>

            <div class="card-user">
                <p class="text-responsive text-center">DATA SENJATA API</p>

                <div class="card-user-body">

                    <div class="card-user-body-content">

                        <div class="card-content-data">
                            <div class="card-content-data-field text-responsive">
                                <div class="mb-3">
                                    <span>Jenis:</span>
                                </div>
                                <div class="mb-3">
                                    <span>Type:</span>
                                </div>
                                <div class="mb-3">
                                    <span>Nomor:</span>
                                </div>
                                <div class="mb-3">
                                    <span>Kaliber:</span>
                                </div>
                            </div>

                            <div class="card-content-data-field-value text-responsive">
                                <div class="mb-3">
                                    <span>{{ $card->jenis ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->type ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->nomor ?? "-" }}</span>
                                </div>
                                <div class="mb-3">
                                    <span>{{ $card->kaliber ?? "-" }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
