@extends("layouts.master-auth")
@section("content")
    <div class="container">
        @if ($errors->any())
            <div id="error-messages" class="position-absolute fade-out end-0 top-10 p-3" style="z-index: 1000;">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="wrapper">
            <form method="POST" action="{{ route("register") }}">
                @csrf
                <section class="card">
                    <div class="card-login">
                        <div class="logo-wrapper">
                            <img src="{{ asset("assets/images/icons/logo.png") }}" style="width: 138px" />
                            <p class="mt-3 text-center">
                                Registrasi Akun
                            </p>
                        </div>
                        <input type="text" class="form-control mb-3" id="nrp" placeholder="NRP" name="nrp"
                            required>

                        <input type="text" class="form-control mb-3" id="nama" placeholder="Nama" name="nama"
                            required>

                        <input type="text" class="form-control mb-3" id="pangkat" placeholder="Pangkat" name="pangkat"
                            required>

                        <input type="text" class="form-control mb-3" id="jabatan" placeholder="Jabatan" name="jabatan"
                            required>

                        <input type="text" class="form-control mb-3" id="kesatun" placeholder="Kesatuan"
                            name="kesatuan" required>

                        <input type="text" class="form-control mb-3" id="email" placeholder="Email" name="email"
                            required>

                        <input type="text" class="form-control mb-3" id="username" placeholder="Username"
                            name="username">

                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

                        <div class="card-login-footer">
                            <a class="btn" href="{{ route("login") }}">Kembali</a>
                            <button class="btn btn-success" type="submit">Daftar</button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
@endsection
