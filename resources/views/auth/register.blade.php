@extends("layouts.master-auth")
@section("content")
    <div class="container">
        <div class="wrapper">
            <form>
                @csrf
                <section class="card">
                    <div class="card-login">
                        <div class="logo-wrapper">
                            <img src="{{ asset("assets/images/icons/logo.png") }}" style="width: 138px" />
                            <p class="mt-3 text-center">
                                Registrasi Akun
                            </p>
                        </div>
                        <input type="text" class="form-control mb-3" id="nrp"
                            placeholder="NRP" name="nrp" required>

                        <input type="text" class="form-control mb-3" id="pangkat"
                            placeholder="Pangkat" name="pangkat" required>


                        <input type="text" class="form-control mb-3" id="jabatan"
                            placeholder="Jabatan" name="jabatan" required>


                        <input type="text" class="form-control mb-3" id="kesatun"
                            placeholder="Kesatuan" name="kesatun" required>

                        <input type="text" class="form-control mb-3" id="email"
                            placeholder="Email" name="email" required>

                        <input type="text" class="form-control mb-3" id="username_or_email"
                            placeholder="Username or Email" name="username_or_email">

                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

                        <div class="card-login-footer">
                            <a class="btn" href="{{route("login")}}">Kembali</a>
                            <button class="btn btn-success" type="submit">Daftar</button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
@endsection
