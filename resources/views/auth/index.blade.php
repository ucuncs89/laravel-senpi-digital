@extends("layouts.master-auth")


@section("content")
<div class="container">
    <div class="wrapper">
        <form>
            @csrf
            <section class="card">
                <div class="card-login">
                    <div class="logo-wrapper">
                        <img src="../assets/images/icons/logo.png" style="width: 138px" />
                        <p class="text-center mt-3">
                            Kartu Pemegang Senpi Digital
                        </p>
                    </div>

                    <input type="text" class="form-control mb-3" id="username" placeholder="Username">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <button class="btn btn-primary" type="button">Login</button>
                </div>
            </section>
        </form>
    </div>
</div>
@endsection
