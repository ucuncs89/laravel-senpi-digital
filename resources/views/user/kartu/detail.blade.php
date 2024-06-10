@extends("layouts.master")

@section("title", "Detail Kartu")

@section("content")
    <div class="content content-inner">
        <section class="section-content-profile">

            <div class="card-user mb-4">
                <div class="card-user-header mb-4">
                    <p class="text-center text-responsive">KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
                    <p class="text-center text-responsive">DAERAH JAWA BARAT</p>
                    <p class="text-center mb-3 text-responsive">RESOR CIANJUR</p>
                </div>

                <div class="card-user-body">
                    <h4 class="text-center mb-4 text-responsive">KARTU PEMEGANG SENJATA API DIGITAL</h4>

                    <div class="card-user-body-content">
                        <div>
                            <img id="image-foto-pribadi"
                                class="card-user-profile"
                                src="{{asset("assets/images/user.png") }}"
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
                                    <span>Udin</span>
                                </div>
                                <div class="mb-3">
                                    <span>000213</span>
                                </div>
                                <div class="mb-3">
                                    <span>V1</span>
                                </div>
                                <div class="mb-3">
                                    <span>Admin</span>
                                </div>
                                <div class="mb-3">
                                    <span>Polri</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-user-footer">
                        <p class="text-responsive">BERLKAU S/D SELESAI</p>
                    </div>
                </div>
            </div>

            <div class="card-user">
                <p class="text-center text-responsive">DATA SENJATA API</p>

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
                                    <span>AK-47</span>
                                </div>
                                <div class="mb-3">
                                    <span>000213</span>
                                </div>
                                <div class="mb-3">
                                    <span>009303</span>
                                </div>
                                <div class="mb-3">
                                    <span>0,9mm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection