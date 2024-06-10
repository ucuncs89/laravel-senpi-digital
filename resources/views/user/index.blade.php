@extends("layouts.master")

@section("title", "Dashboard")

@section("content")
    <div class="content content-inner">
        <section class="section-content-profile">
            <div class="card mb-3">
                <div class="card-body section-profile-card">
                    <i class="bi bi-person-circle icon-user"></i>
                    <h5 class="text-center mb-3">Kamil Aditya Agustina</h5>
                    <h5 class="text-center mb-4">000123445</h5>
                    <button class="btn btn-primary">Profil</button>
                </div>
            </div>

            <div class="card">
                <div class="card-body section-profile-card">
                    <i class="bi bi-file-arrow-up" style="font-size: 4rem"></i>
                    <h5 class="text-center mb-3">Pengajuan/Perpanjang Kartu Pemegang Senpi</h5>
                </div>
            </div>

            <div class="card">
                <div class="card-body section-profile-card">
                    <i class="bi bi-person-vcard" style="font-size: 4rem"></i>
                    <h5 class="text-center mb-3">Lihat Kartu Pemegang Senpi</h5>
                </div>
            </div>
        </section>
    </div>
@endsection
